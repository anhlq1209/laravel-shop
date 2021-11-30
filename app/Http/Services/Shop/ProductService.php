<?php

namespace App\Http\Services\Shop;

use App\Models\Product;
use Illuminate\Support\Facades\Session;

class ProductService {

    public function create($request) {
        try {
            Product::create([
                'name' => (string) $request->input('name'),
                'description' => (string) $request->input('description'),
                'category_id' => (string) $request->input('category_id'),
                'price' => (string) $request->input('price')
            ]);
            
            Session::flash('success', 'Đăng ký thành viên thành công ;)');
        } catch (\Exception $e) {
            Session::flash('error', $e->getMessage());
            return false;
        }
        
        return true;
    }

}