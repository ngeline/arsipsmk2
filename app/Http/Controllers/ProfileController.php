<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile.index', [
            'user' => User::findOrFail(auth()->user()->id)
        ]);
    }

    public function update(Request $request, User $user)
    {
        $input = $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $password = $request->input('password');
        if (!is_null($password)) {
            $request->validate([
                'password' => 'required|confirmed'
            ]);
            $input['password'] = $password;
        }

        $user->update($input);

        return redirect()->back()->with('success', 'Berhasil memperbarui profil');
    }
}
