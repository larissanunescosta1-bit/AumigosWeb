<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SiteController extends Controller
{
   
    public function login() {
        return view('login');
    }

     public function perfilAdmin()
    {
        return view('perfilAdmin');
    }

}


