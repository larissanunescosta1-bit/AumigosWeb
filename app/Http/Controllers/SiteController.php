<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SiteController extends Controller
{
    public function home() {
        return view('home');
    }

    public function usuario() {
        return view('usuario');
    }

    public function admin() {
        return view('admin');
    }

    public function categ() {
        return view('categ');
    }
     public function perfil() {
        return view('perfil');
    }

      public function bandanas() {
        return view('bandanas');
    }

     public function roupas() {
        return view('roupas');
    }

     public function prod() {
        return view('prod');
    }
     public function lacos() {
        return view('lacos');
    }



}


