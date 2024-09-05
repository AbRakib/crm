<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {
    /**
     * user login check and response
     */
    public function checkUser(Request $request) {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string|min:6',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            alertMessage('success', 'Login Success');
            return redirect()->route('admin.dashboard');
        } else {
            alertMessage('error', 'Authentication Wrong');
            return redirect()->back();
        }
    }
}
