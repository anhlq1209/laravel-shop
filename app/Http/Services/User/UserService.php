<?php

namespace App\Http\Services\User;

use App\Models\User;
use Illuminate\Support\Facades\Session;

class UserService {

    public function create($request) {
        try {
            $newUser = User::create([
                'name' => (string) $request->input('name'),
                'email' => (string) $request->input('email'),
                'password' => (string) bcrypt($request->input('password'))
            ]);
            
            Session::flash('success', 'Đăng ký thành viên thành công ;)');

            return $newUser;
        } catch (\Exception $e) {
            Session::flash('error', $e->getMessage());
            return false;
        }
        
        return true;
    }

}