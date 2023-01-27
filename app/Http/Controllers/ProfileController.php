<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;   

class ProfileController extends Controller
{
    public function index()
    {
        // $user = User::where('id', Auth::user()->id)->first();
    	// return view('admin.profile.index');
        
        return view('admin.profile.index', [
            'user' => User::all()
        ]);
    }


}
