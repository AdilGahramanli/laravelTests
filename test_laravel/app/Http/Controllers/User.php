<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    //
    function users(){
        return view('user', ['users'=>"users liste datas"]);
    }
}
