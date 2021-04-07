<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use\Illuminate\Support\Facades\Auth;
use\Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function RegisterUser(Request $request){

     

     $this->validate($request,[
         "firstname"=> "required|max:20",
         "lastname"=>"required|max:20",
         "email"=>"required|email|unique:users",
         "password"=>"required|min:6"
     ]);


     $table =new User();

    //  $firstname=$request("firstname")  // first method
    
     $table->first_name    = $request->input("firstname");   // second method
     $table->last_name     = $request->input("lastname");  
     $table->email    = $request->input("email"); 
     $table->password = bcrypt($request->input("password")); 

     $table->save();
     return redirect()->back()->with("message","Registered Successfull");
      
    }


    public function LoginUser(Request $request){
        $data =$request->only("email","password");

        if(Auth::attempt($data)){
            return redirect()->route("home");
        }

        return redirect()->back()->with("message1","Login Failed");

    }


    public function GetHome(){
        return view("home");
    }

    
    public function LogOut(){
        Auth::logout();
        Session::flush();
        return redirect("/")->with("message2","Log Out Successfully");
    }





}
