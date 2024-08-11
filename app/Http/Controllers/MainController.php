<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class MainController extends Controller
{
   public function index()
   {

   $topstories=Post::all()->take(4);
    return view("welcome",compact("topstories"));
   }

   public function show(Post $post)
   {

      return view("show",compact("post"));

   }
}
