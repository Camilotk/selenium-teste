<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
   public function index()
   {
       return view('login');
   } 

   public function doLogin(Request $request)
   {
       $request->validate([
           'email' => 'required|email',
           'password' => 'required|alphaNum|min:3'
       ]);

       return "Logado";
   }
}
