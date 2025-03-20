<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registerForm(){
        return view("Auth.register");
    }
    public function register(Request $request){
        // catch 
        // validation
        $data = $request->validate([
            'name' => 'required|string|max:100' ,
            'email' => 'required|email|max:100' ,
            'password' => 'required|string|min:6|confirmed'
        ]);
        // hash password
        $data['password'] = bcrypt($request->password);
        // store in DB
        User::create($data);
        // store success msg in session
        session()->flash('success','You Registered Successfully');
        // redirect Login
        return redirect(route('LoginForm'));

    }
    public function loginForm(){
        return view("Auth.login");
    }
    public function login(Request $request){
        // catch
        //validate
        $request->validate([
            'email' => "required|email|max:100" ,
            'password' => "required|string|min:6"
        ]);
        // compare using Auth Attempt
        $valid = Auth::attempt([
            'email' => $request->email ,
            'password' => $request->password
        ]);
        // check if valid user or not
        if($valid){
            // regenerate session id
            $request->session()->regenerate();
            // catch the user name from Auth user
            $userName = Auth::user()->name ;
            // redirect to home page with userName
            return view('home')->with('userName',$userName);
        }else{
            return back()->withErrors(['email' => 'Invalid Email Or Password'])->withInput();
        }

    }
    public function logout(Request $request){
        // logout
        Auth::logout();
        // destroy session
        $request->session()->invalidate();
        // generate new CSRF
        $request->session()->regenerateToken();
        // redirect to the login
        session()->flash('success','You Logged Out Successfully');
        return redirect(route('LoginForm'));

    }
}
