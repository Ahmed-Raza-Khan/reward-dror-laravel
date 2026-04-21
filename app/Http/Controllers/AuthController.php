<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function forgotPassword() {
        return view('auth.forgot-password');
    }

    public function verificationCode() {
        return view('auth.forgot-password-verification-code');
    }

    public function newPassword() {
        return view('auth.new-password');
    }
}
