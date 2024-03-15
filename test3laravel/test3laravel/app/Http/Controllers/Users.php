<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    public function users(){
        return view('users',['users'=>"users liste message du controller"]);
    } 
}
