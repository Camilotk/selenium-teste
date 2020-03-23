<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function index()
   {
       return view('login');
   } 

   public function doLogin()
   {
       $rules = [
           'email' => 'required|email'
       ];
       return "Logado";
   }
}
