<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function index(){
        return view('uregister');
    }
    public function storedata(Request $request){
        User :: create($request->all());
        return "success";
    }
}
