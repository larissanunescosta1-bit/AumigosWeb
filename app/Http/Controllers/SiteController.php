<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use App\Models\CategoriaProduto;

use Illuminate\Http\Request;


class SiteController extends Controller
{
   
    public function meulogin() {
        return view('meulogin');
    }

     public function perfilAdmin()
    {
        return view('perfilAdmin');
    }


public function index()
{
     $produtos = Produto::with('categoria')->get();
    $categorias = CategoriaProduto::all();

    return view('index', compact('produtos', 'categorias'));
}

}


