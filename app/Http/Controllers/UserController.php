<?php



namespace App\Http\Controllers;

use App\Models\User;



use Illuminate\Http\Request;



class UserController extends Controller

{

    public function index($user)

    {



         $user=User::where("username",$user)->first();

    

        $photo=$user->dp;



        return view('profile',compact("user","photo"));



    }

}


