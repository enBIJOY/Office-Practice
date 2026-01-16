<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
use App\Mail\NewUserWelcomeMail;
use Illuminate\Support\Facades\Mail;


class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
    public function postLogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('auth.dashboard')
                        ->withSuccess('You have Logged in Successfully');
        }
        
        return redirect("login")->withSuccess('invalid credentials - Username or password are incorrect');
    }

    public function postRegistration(Request $request){  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:24',
            'confirm_password' => 'required_with:password|same:password'
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        
        $user->save();

        $mail = Mail::to($user->email)->send(new NewUserWelcomeMail($user));
        
        if($user && $mail){
            return view("auth.registration-success")->with('Success','Great! registration-success');
        }
        return redirect("auth.register")->withSuccess('Try Again Register');
    }

    public function dashboard()
    {
      if(Auth::check()){
        return view('auth.dashboard');
      }
        return redirect("auth.login")->withSuccess('Opps! You do not have access');
    }


    // public function create(array $data)
    // {
    //   return User::create([
    //     'name' => $data['name'],
    //     'email' => $data['email'],
    //     'password' => Hash::make($data['password'])
    //   ]);
    // }

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('auth.login')->withSuccess('Logout Successfull');
    }
}
