<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryFormRequest;
use App\Http\Services\Shop\CategoryService;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoyController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', [
            'title' => 'Categories',
            'categories' => $categories
        ]);
    }

    public function create() {
        return view('admin.category.create', [
            'title' => 'New Category'
        ]);
    }

    public function store(CategoryFormRequest $request) {
        if ($this->categoryService->create($request)) {
            return redirect()->back();
        }

        Session::flash('error', 'Vui lòng nhập đủ thông tin Category');
        return redirect()->back()->withInput();
    }

    public function edit($id) {
        $category = Category::find($id);

        return view('admin.category.edit', [
            'title' => 'Edit category',
            'category' => $category
        ]);
    }

    public function update($id, Request $request) {
        if (Category::where('id', $id)->update(['name' => $request->input('name')])) {
            Session::flash('success', 'Cập nhật thông tin Category thành công');
            return redirect()->back();
        }
        
        Session::flash('error', 'Cập nhật thất bại');
        return redirect()->back()->withInput();
    }

    public function destroy($id) {
        if (Category::where('id', $id)->delete()) {
            Session::flash('success', 'Xóa Category thành công');
            return true;
        }
        
        Session::flash('error', 'Xóa thất bại');
        return false;
    }
}