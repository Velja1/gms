<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function register(){
        return view('pages.register');
    }

    public function doRegister(Request $request){
        try {
            $user = new User();

            $user->first_name = $request->firstname;
            $user->last_name = $request->lastname;
            $user->email = $request->email;
            $user->password = md5($request->password);
            $user->role_id = 1;

            $user->save();
            if($user->role->name=='user'){
                session()->put('user', $user);
                return redirect()->route('index');
            }
            else if($user->role->name=='admin'){
                session()->put('admin', $user);
                return redirect()->route('index');
            }
        }
        catch(Exception $ex) {
            return redirect()->route('register')->with('error', 'Error: '.$ex->getMessage().', try again');
        }

    }

    public function login(){
        return view('pages.login');
    }

    public function doLogin(Request $request){
        $user = User::where('email', $request->email)->where('password', md5($request->password))->first();

        if(!$user){
            return redirect()->route('login')->with('error', 'Invalid email or password');
        }
        if($user->role->name=='user'){
            session()->put('user', $user);
            return redirect()->route('index');
        }
        else if($user->role->name=='admin'){
            session()->put('admin', $user);
            return redirect()->route('index');
        }
        return redirect()->route('login')->with('error', 'Something went wrong, try again');
    }

    public function logout(){
        session()->forget(['user','admin']);
        return redirect()->route('login');
    }
}
