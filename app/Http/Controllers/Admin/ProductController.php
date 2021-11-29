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

    public function store(Request $request) {
        var_dump($request->input());
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
        $product = Product::find($id);
    }

    public function destroy(Request $request) {
        // $report = $request['id'];      

        // Category::find($report);

        // $report->delete();        
        // $request->session()->flash('success', 'Delete successfully');
    }
}
