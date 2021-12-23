<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\RegisterFormRequest;
use App\Http\Services\User\UserService;
use App\Mail\VerifyEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        if ($this->logged) {
            return redirect()->route('home');
        }
        return view('auth.login.index', ['title' => 'Login']);
    }

    public function attempt(Request $request) {

        $this->validate($request, [
            'email' => 'required|email:filter', 
            'password' => 'required'
        ]);

        $data = $request->only(['email', 'password']);
        
        if (Auth::attempt([
            'email' => $data['email'],
            'password' => $data['password'],
            'roll' => 'user'
        ], $request->input('remember'))) {
            
            return redirect()->route('home');
        
        }

        Session::flash('error', 'Email hoặc mật khẩu không đúng!');
        return redirect()->back()->withInput();
    }

    public function create()
    {
        if ($this->logged) {
            return redirect()->route('home');
        }
        return view('auth.register.index', ['title' => 'Register']);
    }

    public function store(RegisterFormRequest $request)
    {
        if ($request->input('password') === $request->input('passwordRetype')) {
            $newUser = $this->userService->create($request);

            $id = $newUser->id;
            $code = uniqid();
            $newUser->code = $code;
            $newUser->save();
            
            //  Send mail
            $data = [
                'name' => $request->input('name'),
                'link' => route('verify-email', [
                    'id' => $id,
                    'code' => $code
                ])
            ];
            Mail::to('anhlq1209@gmail.com')->send(new VerifyEmail($data));
            
            Session::flash('success', 'Email xác nhận đã được gửi đến địa chỉ email của bạn');

            return redirect()->back();
        }

        Session::flash('error', 'Thông tin không chính xác!');
        return redirect()->back()->withInput();
    }

    public function verifyEmail($id, $code) {

    }

    public function show() {

    }

    public function edit()
    {
        
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
