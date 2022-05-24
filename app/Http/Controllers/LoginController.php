<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('home');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'NRP' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            // $request->session()->regenerate();
 
            // return redirect()->intended('/dashboard');
            if (auth()->user()->type == 'mahasiswa')
            {
                return redirect()->route('dashboard');
            }
            else if (auth()->user()->type == 'dosen') 
            {
                return redirect()->route('dashboard.dosen');
            }
            else if (auth()->user()->type == 'staff') 
            {
                return redirect()->route('dashboard.staff');
            }
            else
            {
                return redirect()->route('/');
            }
        }

        return back()->with('You have to be logged in!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
