<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Alert;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            $request->session()->regenerate();

            if (auth()->user()->getNameRole() == "Admin") {
                return redirect()->intended(route('admin.dashboard'));
            } else {
                return redirect()->intended(route('siswa.dashboard'));
            }
        }

        return back()->withErrors([
            'errors' => "Email atau Password anda salah."
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function postregister(Request $request){
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];

        $messages = [];

        $attributes = [
            'name' => 'Nama',
            'email' => 'Email',
            'password' => 'Password',
        ];

        $validator = Validator::make($request->all(), $rules, $messages, $attributes);

        if(!$validator->passes()){
            return redirect()->back()->withInput()->withErrors($validator->errors()->toArray());
        } else {
            $data = new User;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->password = Hash::make($request->password);
            $data->role_id = '2';

            $data->save();

            // Alert::success('Berhasil Melakukan Registrasi');

            return redirect()->route('login');
        }
    }
}
