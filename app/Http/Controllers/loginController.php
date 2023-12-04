<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Storage;

class loginController extends Controller
{
    //
    public function login()
    {
        
        return view("login.login");
    }

    public function auth(request $request)
    {
        $credentials = $request->only('email', 'password');

        // Simulasi autentikasi dengan dummy JSON
        $users = [
            [
                'email' => 'ridho67@gmail.com',
                'password' => bcrypt('123456'),
                'name' => 'Ridho',
            ],
        ];

        foreach ($users as $user) {
            if ($user['email'] === $credentials['email'] && password_verify($credentials['password'], $user['password'])) {
                return redirect()->intended('/dashboard');
            }
        }

        return redirect()->route('login')->with('error', 'Email atau password salah.');
    }
}

