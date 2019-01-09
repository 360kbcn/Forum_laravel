<?php

namespace App\Http\Controllers;

use App\Forum;

class ForumsController extends Controller
{
   public function index(){

     $forums = Forum::latest()->paginate(10);

     // dd($forums);

     return view('forums.index', compact('forums'));

   }
}
