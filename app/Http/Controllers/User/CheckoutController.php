<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('user.checkout', [
            'title' => 'Check Out',
            'categories' => $this->categories,
            'logged' => $this->logged
        ]);
    }
}
