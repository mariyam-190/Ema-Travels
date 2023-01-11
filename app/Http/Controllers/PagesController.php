<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class PagesController extends Controller
{
   public function index(){
       return view('index');
   }

   public function about(){
       return view('about');
   }

}
