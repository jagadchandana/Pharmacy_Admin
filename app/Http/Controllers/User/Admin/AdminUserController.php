<?php

namespace App\Http\Controllers\User\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
   /**
    * @return [type]
    */
   public function index()
   {
      return view('pages.users.admin.admin-index');
   }
}
