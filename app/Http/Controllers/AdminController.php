<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    public $email;
    public $password;

    function login()
    {

      if(session()->has('admin_credential'))
        {
           //return redirect()->route("admin_index");
             return view('admin.pages.index')
             ->with('admin',session('admin_credential'));
        }
        return view('admin.pages.login');
    }

    function authenticateAdmin(Request $req)
    {    
        $this->email= $req->input('email');
        $this->password= $req->input('password');
        
            if(!$this->email  || !$this->password)
            {
                $req->flashOnly('email');
                session()->flash('error','Please enter email and password.');
                return  redirect()->back();
            }
            
            else
            {
                $admin= $this->getAdmin( $this->email, $this->password);  
            }    

            if(count($admin))
            {
                $this->makeSession( $admin);
                return view('admin.pages.index')
                    ->with('admin',$admin);
            }
            else
            {    
                $req->flashOnly('email');
                session()->flash('error','Invalid email or password.');
                return  redirect()->back();
            }
        
    }

    function getAdmin($email,$password)
    {
       return Admin::where('email' ,$email)->where('password' ,$password) ->get();
    }


    function makeSession($admin){
        session()->put('admin_credential',$admin);
    }

    function logout()
    {
        session()->pull('admin_credential');
      ///  return session()->all();
       return  redirect()->route('admin');
    }


}
