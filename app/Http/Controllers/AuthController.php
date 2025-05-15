<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function create(){
        return view('auth.register');
    }
    public function store(){
        $newUserData=request()->validate([
            'name'=>'required|min:3|max:255',
            'userName'=>['required','min:3','max:255',Rule::unique('users','userName')],
            'email'=>['required','email',Rule::unique('users','email')],
            'password'=>'required|min:8'
        ]);
        $user=User::create($newUserData);
        // login
        auth()->login($user);
        return redirect('/')->with('success','Welcome '.$user->name);
    }
    public function login(){
        return view('auth.login');
    }
    public function post_login(){
        //validation
        $loginUserData=request()->validate([
            'email'=>['required','email',Rule::exists('users','email')],
            'password'=>['required','min:8']
        ]);
        //auth attempt
        if(auth()->attempt($loginUserData)){
            return redirect('/')->with('success','Welcome back '.auth()->user()->name);
        }else{
            return redirect()->back()->withErrors([
                'email'=>'Invalid email or password'
            ]);
        }
    }
    public function logout(){
        auth()->logout();
        return redirect('/')->with('logout','Good bye for now');
    }
}
