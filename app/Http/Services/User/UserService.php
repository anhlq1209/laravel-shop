<?php

namespace App\Http\Services\User;

use App\Mail\VerifyMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class UserService {

    public function create($request) {
        try {
            $newUser = User::create([
                'name' => (string) $request->input('name'),
                'email' => (string) $request->input('email'),
                'password' => (string) bcrypt($request->input('password'))
            ]);

            $newUser->code = uniqid();
            $newUser->save();

            $data = [
                'name' => $newUser->name,
                'link' => route('verify',[
                    'id' => $newUser->id,
                    'code' => $newUser->code
                ])
            ];

            Mail::to($newUser->email)->send(new VerifyMail($data));
            
            Session::flash('success', 'Đăng ký thành viên thành công ;)');
        } catch (\Exception $e) {
            Session::flash('error', $e->getMessage());
            return false;
        }
        
        return true;
    }

}