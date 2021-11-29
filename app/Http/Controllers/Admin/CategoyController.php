<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoyController extends Controller
{
    public function index()
    {
        return view('admin.category.index', [
            'title' => 'Categories',
            'categories' => $this->categories
        ]);
    }

    public function create() {
        return view('admin.category.create', [
            'title' => 'New Category'
        ]);
    }

    public function store(Request $request) {
        
    }

    public function edit($id) {
        $category = Category::find($id);

        return view('admin.category.edit', [
            'title' => 'Edit category',
            'category' => $category
        ]);
    }

    public function update($id, Request $request) {
        
    }

    public function destroy(Request $request) {
        // $report = $request['id'];      

        // Category::find($report);

        // $report->delete();        
        // $request->session()->flash('success', 'Delete successfully');
    }
}
