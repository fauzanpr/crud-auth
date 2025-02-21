<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view("login");
    }

    public function login(Request $request) {
        $credential = $request->only("email", "password");
        Auth::attempt($credential);
        $request->session()->regenerate();

        return redirect()->route("job.index");
    }
}
