<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    public function index()
    {
        return view('user.likes', [
            'title' => 'Likes',
            'categories' => $this->categories,
            'logged' => $this->logged
        ]);
    }
}
