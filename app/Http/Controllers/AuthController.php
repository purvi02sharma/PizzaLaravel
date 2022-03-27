<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\PizzaMail;
use App\Models\User;
use Hash;
use Session;
use Mail;

class AuthController extends Controller
{
    //
    public function login()
    {
    return view("Login");
    }

    public function register()
    {
      return view("Register");
    }

    public function registerUser(Request $req)
    {
           $req->validate(['username'=>'required', 'email'=>'required|unique:users', 'password'=>'required|min:6','cpassword'=>'required|same:password']);
    $user = new User();
    $user->name= $req->username;
    $user->email=$req->email;
    $user->password=Hash::make($req->password);
    $res=$user->save();
    if($res)
    {
    return back()->with('Success','You have registered successfully');
    }
    else
    {
        return back()->with('fail','Something wrong');
    }

    }

    public function loginUser(Request $req)
    {
        
        $user = User::where('email','=',$req->email)->first();
        if($user)
        {
            if(Hash::check($req->password,$user->password))
            {
             $req->session()->put('loginId',$user->id);
             return redirect('menu');
            } 
        else{
            return back()->with('fail',"Password Doesn't match") ;      
             }
        }
        else
        {
              return back()->with('fail','This email is not registered');
        }
    }
  public function menu()
  {
$data=array();
if(Session::has('loginId'))
{
    $data=User::where('id','=',Session::get('loginId'))->first();
}
    return view('menu',compact('data'));
  }

  public function logout()
  {
    if(Session::has('loginId'))
    {
        Session::pull('loginId');
        return redirect('login');
    }
  }

  public function sendEmail(Request $req)
  {
    $details= [
        'name' => $req->Name,
        'email'=>$req->email1,
        'seat' =>$req->People,
        'msg'=>$req->Message,
        'date'=>$req->date
    ];
    
        Mail::to($req->email1)->send(new PizzaMail($details));
        return back()->with('message_sent',"Your message has been sent successfully!!");

  }
}
