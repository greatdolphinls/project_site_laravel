<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User ;
use App\Models\Profile ;
use Auth;
use Mail;
use PDF;
use Illuminate\Support\Facades\Session;
use URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Validation\Validator;

class AuthController extends Controller
{
    public function __construct(){
    }

    public function signInPath(){
        return view('auth.signIn');
    }

    public function signIn(Request $request){

        $email = $request->input('email');
        $password = $request->input('password');
        $remember = $request->input('remember');
        $secret = array('email' => $email , 'password' => $password);

        if(Auth::attempt($secret,$remember)){
            $user_id = Auth::user()->id;
            $user = Auth::user();
            Session::put('userid', $user_id);
            Session::put('role', Auth::user()->role);
            return redirect('/project/list'); 
        }else{
            Session::flash('error','Email and Password are not correct');
            return redirect('/');
        }
    }

    public function signUp(Request $request){

        $username  = $request->input('username');
        $email     = $request->input('email');
        $password  = $request->input('password');
        $confirm_password = $request->input('confirm_password');
        if ($password != $confirm_password){
            Session::flash('error','Password are not confirmed.');
            return redirect('signUp');
        }
        $user = new User;
        $user->username = $username;
        $user->password = bcrypt($password);
        $user->email =  $email;
        $user->save();
        return redirect('/');
    }
}
