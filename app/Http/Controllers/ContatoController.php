<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        $data['titulo']="Página de contato";
        $data['corpo']="Minha página de Contato corpo";
        return view('contato',$data);
    }
    
  
   

}
