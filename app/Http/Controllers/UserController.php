<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function index(){
        return view('welcome');
    }
    public function storedata(Request $request){

        $this->validate($request,[
        'first_name'=>'required | max:20',
        'last_name'=>'required | max:20',
        'email'=>'required | email | unique:users',
        'password'=>'required | min:6'

        ]);
User::create($request->all());

//return redirect()->back()->with('message','Registration success');
return redirect()->route('userHome');

    }

    public function Logindata(Request $request){
              $data = $request->only('email','password');

     if(Auth::attempt($data)){
        return redirect()->route('userHome');//home page
        
     }
     return redirect()->back()->with('message','Login failed');

    }
    
    public function mHome(){
        return view('mainHome');
    }
    public function ureg(){                          // user register
        return view('uregister');
    }
       
    }

