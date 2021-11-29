<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoyController extends Controller
{
    public function index()
    {
        return view('admin.categories', [
            'title' => 'Categories',
            'categories' => $this->categories
        ]);
    }
}
