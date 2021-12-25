<?php

namespace App\Http\Controllers;

use App\Mail\VerifyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class TestController extends Controller
{
    public function index() {

        $data = [
            'name' => 'Test name',
            'link' => 'Test link'
        ];

        if (Mail::to('noirlee.1208@gmail.com')->send(new VerifyMail($data))) {
            Session::flash('success', 'Gửi mail thành công');
        } else {
            Session::flash('danger', 'Gửi mail thất bại');
        }

        return view('test');
        
    }
}
