<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index() {

        return view('contact', [
            'title' => 'Contact',
            'categories' => $this->categories,
            'logged' => $this->logged
        ]);
        
    }
}
