<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            'username' => 'required|max:255',
            'email'    => 'required|email',
            'password' => 'required:min:8|confirmed' , 
            'password_confirmation' => 'required'
        ] , [
            'username.required' => 'Username wajib diisi',
            'username.max' => 'Username maksimal 255 karakter',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 8 karakter',
            'password.confirmed' => 'Konfirmasi password tidak sesuai',

        ]);


        dd($request->all());
     }

}
