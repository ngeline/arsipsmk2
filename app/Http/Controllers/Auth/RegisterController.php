<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function postregister(Request $request){
        $input = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);

        $input['role_id'] = 2;
        $input['password'] = Hash::make($request->input('password'));
        User::create($input);

        return redirect()->route('login');
    }
}
