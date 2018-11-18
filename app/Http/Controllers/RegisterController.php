<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\Register\Store;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register.index');
    }

    public function store(Store $store)
    {
        $user = new User();
        $user->name = $store->name;
        $user->password = Hash::make($store->password);
        $user->email = $store->email;
        $user->save();

        Auth::login($user);

        return redirect()->route('dashboard');
    }
}
