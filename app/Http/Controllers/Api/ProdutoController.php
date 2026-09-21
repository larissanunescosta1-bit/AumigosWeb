<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
      public function index()
    {
        $produtos = Produto::with('categoria')->get();

        return response()->json($produtos);
    }
}
