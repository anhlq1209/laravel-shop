<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', [
            'title' => 'Products',
            'products' => $products
        ]);
    }

    public function create() {
        $categories = Category::all();
        return view('admin.product.create', [
            'title' => 'New Category',
            'categories' => $categories
        ]);
    }

    public function store(ProductFormRequest $request) {
        if ($this->productService->create($request)) {
            return true;
        }

        Session::flash('error', 'Vui lòng nhập đủ thông tin Product');
        return false;
    }

    public function edit($id) {
        $product = Product::find($id);
        $categories = Category::all();

        return view('admin.product.edit', [
            'title' => 'Edit product',
            'product' => $product,
            'categories' => $categories
        ]);
    }

    public function update($id, Request $request) {
        if (Product::where('id', $id)->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            'price' => $request->input('price')
            ])) {
            Session::flash('success', 'Cập nhật thông tin Product thành công');
            return redirect()->back();
        }
        
        Session::flash('error', 'Cập nhật thất bại');
        return redirect()->back()->withInput();
    }

    public function destroy(Request $request) {
        // $report = $request['id'];      

        // Category::find($report);

        // $report->delete();        
        // $request->session()->flash('success', 'Delete successfully');
    }
}
