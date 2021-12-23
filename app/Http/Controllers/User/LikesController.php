<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('user.likes', [
            'title' => 'Likes',
            'categories' => $categories,
            'logged' => $this->logged
        ]);
    }
}
