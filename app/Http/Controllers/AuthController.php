<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        // auth()->login($user);
        Auth::login($user);
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
        if(Auth::attempt($loginUserData)){
        // check admin or not
            if (Auth::user()->is_admin) {
                return redirect('/admin/blogs')->with('success','Welcome back admin '.Auth::user()->name);
            }else{
                return redirect('/')->with('success','Welcome back '.Auth::user()->name);
            }
        }else{
            return redirect()->back()->withErrors([
                'email'=>'Invalid email or password'
            ]);
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/')->with('logout','Good bye for now');
    }
}
