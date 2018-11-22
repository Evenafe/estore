<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\Login\Store;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login.index');
    }

    public function store(Store $store)
    {
        $credentials = $store->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return redirect()->route('register');
    }
}
