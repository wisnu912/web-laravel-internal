<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.Login');
    }


    public function register()
    {
        return view('Auth.regis');
    }


     public function regisProcess(Request $request){
        //validasi data

        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email'    => 'required|email',
            'password' => 'required:min:8|confirmed' ,
            'password_confirmation' => 'required'
        ] , [
            'name.required' => 'Username wajib diisi',
            'name.max' => 'Username maksimal 255 karakter',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 8 karakter',
            'password.confirmed' => 'Konfirmasi password tidak sesuai',

        ]);

        //insert data ke table user
        $user = User::create([
           'name' => $request->name,
           'email'    => $request->email,
           'password' => $request->password,
           'password_confirmation' => $request->password_confirmation
        ]);
        //save data user
        $user->save();

        //rederict ke halaman login jika berhasil registrasi
        return redirect()->route('login')
        ->with('success' , 'registrasi berhasil silahakan login');
     }

        public function loginProcess(Request $request){

             $credentials = $request->validate([
               'email' => ['required' , 'email'],
               'password' => ['required']
             ]);


           if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }


         return back()->withErrors([
                'email' => 'The provided credentials do not match our records'
            ])->onlyInput('email');


    }

    public function Logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }


}
