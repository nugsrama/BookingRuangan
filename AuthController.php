<?php

namespace App\Http\Controllers;

use session;
use App\Models\role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('login');
    }
    public function Register()
    {
        return view('register');
    }
    public function authenticating(Request $request)
    {
        $credentials = $request->validate(
            [
                'username' => ['required'],

                'password' => ['required'],



            ],

        );
        $request->validate(
            [
                'g-recaptcha-response' => 'required|captcha',

            ]
        );
        //apakah login valid
        if (Auth::attempt($credentials)) {
            //apakah user status active
            if (Auth::user()->status != 'active') {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                session()->flash('status', 'failed');
                session()->flash('message', 'Akun kamu belum aktif, hubungi admin');
                return redirect('/login');
            }
            $request->session()->regenerate();
            if (Auth::user()->role_id == 1) {
                return redirect('dashboard');
            }

            if (Auth::user()->role_id == 2) {
                return redirect('ruangan');
            }
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                //dd($credentials);
                return redirect()->intended('')->withToastSuccess('Berhasil masuk!');
            }
            // JIKA LOGIN GAGAL
            return back()->with('toast_error', 'Login gagal!');




            return redirect();
        }
        session()->flash('status', 'failed');
        session()->flash('message', 'Username atau Password Salah!');

        return redirect('/login');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
    public function registerproses(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|unique:users|max:255',
            'password' => 'required|max:255',
            'email' => 'required|max:50',
        ]);


        $user = User::create($request->all());

        session()->flash('status', 'success');
        session()->flash('message', 'Registrasi berhasil, silahkan login');
        return redirect('register');
    }
}
