<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(Request $req)
    {

        return view('index',['user'=>$req->input('email')]);
    }
}
