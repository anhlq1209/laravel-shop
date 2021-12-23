<?php

namespace App\Http\Controllers;

use App\Mail\VerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function index() {

        $data = [
            'name' => 'Kjn',
            'link' => 'Day la LINK'
        ];

        $sended = Mail::to('anhlq1209@gmail.com')->send(new VerifyEmail($data));
 
        if ($sended) {
            echo 'Fails';
        }else{
            echo 'Succeses';
        }
    }
}
