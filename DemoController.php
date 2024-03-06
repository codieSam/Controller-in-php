<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
   public function index(){
     return view('display');
   }
   public function AboutFunction(){
    return view('about');
   }
}
