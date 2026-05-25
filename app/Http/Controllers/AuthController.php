<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request){

        $request->validate([
                    'email'=>'required',
                    'password'=>'required'
                ],
                [
                    'email.required'=>'Email wajib diisi',
                    'password.required'=>'Password wajib diisi',            
                ]
        );
        // return view('pages.beranda');


        $infoLogin = [
            'email'=>$request->email,
            'password'=>$request->password
        ];

        // if(Auth::attempt($infoLogin)){
        //     // echo 'sukses';
        //     return view('pages.beranda');
        // }
        // else{
        //     // echo 'usename dan password salah';
        //     return redirect('')->withErrors('Username dan password tidak sesuai')->withInput();
        // }

        if(Auth::attempt($infoLogin)){

            if(Auth::user()->role =='admin'){
                // return redirect('admin/operator');
                return view('pages.beranda');
            }
            elseif(Auth::user()->role =='operator'){
                // return redirect('admin/operator');
                return view('pages.beranda');
            }

        }
        else{
            return redirect('')->withErrors('Username dan password tidak sesuai')->withInput();
        }

    }

    function logout(){
        Auth::logout();
        return redirect('');
    }
}
