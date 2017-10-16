<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class tamsyascontroller extends Controller
{
   public function miradi(){
     return view('frontend.miradi');
   }
   public function programs(){
     return view('frontend.programs');
   }
   public function events(){
     return view('frontend.events');
   }
}
