<?php

namespace App\Http\Services\Shop;

use App\Models\Category;
use Illuminate\Support\Facades\Session;

class CategoryService {

    public function create($request) {
        try {
            Category::create([
                'name' => (string) $request->input('name')
            ]);
            
            Session::flash('success', 'Đăng ký thành viên thành công ;)');
        } catch (\Exception $e) {
            Session::flash('error', $e->getMessage());
            return false;
        }
        
        return true;
    }

}