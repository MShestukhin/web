<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Routing\Controller;
class StaticController extends Controller
{
    public function _construct(){
        $this->middleware('auth');
    }

     public function about(){
         $users=User::select(['name','email'])->get();
         return view('my', ['users'=>$users]);
     }
    public function getTable(Request $request){
        // $email=$request->input('name');
        // $pass=$request->input('pass');
        // $user=User::where('email',$email)->where('password',$pass)->get();
        // if(count($user)>0){
        //     $users=User::select(['name','email'])->get();
        //     return view('my', ['users'=>$users]);
        // }
        // else{
        //     return redirect('/');
        // }
    }
}