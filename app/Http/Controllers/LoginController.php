<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function actionlogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->to('home');
        }

        Alert::error('Upss', 'Mohon periksa email dan password anda');
        return back();
    }

    public function register()
    {
        return view('register');
    }

    public function actionRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        // insert into users (name, email, password) values ('inputan name','');

        User::create($request->all());
        toast('Daftar User Berhasil', 'success');
        return redirect()->to('register')->with('success', 'Register Berhasil');
    }
}
