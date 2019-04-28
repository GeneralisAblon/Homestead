<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;
class ProdutosController extends Controller
{
     
    public function show ($id)
    {

        $produtocontroller = Produtos::find($id);
        return view('produtos.show', array('produto' => $produtocontroller));

    }

    public function index()
    {
        $produtoscontroller = Produtos::all();
        return view('produtos.index', array('produtos' => $produtoscontroller));


    }




}
