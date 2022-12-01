<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   /**
    * @return [type]
    */
   public function index()
   {
      return view('pages.home.home-index');
   }
}
