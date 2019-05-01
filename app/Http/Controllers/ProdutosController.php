<?php

namespace App\Http\Controllers;
//batatababaca
use Illuminate\Http\Request;
use App\Produtos;
use Validator;


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

    public function create()
    {

        return view('produtos.create');

    }

    public function store(Request $request)
    {
        $this->validate($request, 
        [
            'sku' => 'required|unique:produtos|min:3',
            'título' => 'required|min:3',
            'descricao' => 'required|min:10',
            'preco' => 'required|numeric',
        ]);

        $produto = new Produtos();
        $produto->sku = $request->input('sku');
        $produto->titulo = $request->input('titulo');
        $produto->descricao = $request->input('descricao');
        $produto->preco = $request->input('preco');

        if($produto->save ())
        {
            return redirect('produtos/create')->with('success', 'Produto cadastrado com sucesso!!!');
        }
        
    }

    public function edit ($id)
    {

        $produtocontroller = Produtos::find($id);
        return view('produtos.edit',compact('produto','id'));

    }



}
