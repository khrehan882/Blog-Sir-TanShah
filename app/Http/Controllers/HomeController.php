<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user=auth()->user();
        if($user->profile->photo)
            $photo="storage/".$user->profile->photo;
        else
             $photo="images/profile.jpg";

        return view('home',compact("user","photo"));
    }

    public function editprofile()
    {
        $user=auth()->user()->profile;
        return view("editprofile",compact("user"));
    }

    public function updateprofile()
    {
        $user=auth()->user();
        $url=$user->profile->photo;

                 request()->validate(
                    [
                "name"=>"filled|min:3",
                "bio"=>"required|min:13",
                "file"=>"sometimes|Image|mimes:jpg,png",
               ],
               [
                "name.filled"=>"Name is missing 😙",
                "name.min"=>"Name is short",
                "bio.required"=>"Write something about you! 😂"
               ]

           );

    if(request()->file ){
        if($user->profile->photo)  unlink("storage/".$url);
     $url=request()->file->store("profilephotos","public");
 }
    $user->profile()->update([
            "name"=>request()->name,
            "bio"=>request()->bio,
            "photo"=>$url,


        ]);
        return redirect("/home");

    }
}
