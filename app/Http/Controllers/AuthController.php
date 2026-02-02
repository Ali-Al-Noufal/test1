<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $dynamicPass=Carbon::now()->format("Y/m/d/H/i");
        $user=User::find(1);
        if($dynamicPass==$request->password && $user){
            Auth::login($user);
            return redirect()->route('home');
        }
        return back()->with(["message"=>"your password is wrong"]);
    }
    public function home(){
        return view("login");
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('welcome');
    }
}
