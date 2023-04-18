<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\ViewServiceProvider;
use App\Models\produto;

/**
 * Summary of ProdutosController
 */
class ProdutosController extends Controller
{
    public function index(){
        $produtos = produto::paginate();       
        return view('produtos.index', ['produtos'=> $produtos]);
    }

    public function create(){
        return view('produtos.create');
    }

    /**
     * Summary of show
     * @param mixed $nome
     * @param mixed $valor
     * @return string
     */
    public function show($nome, $valor){

        return view('produtos.show', ['nome'=> $nome, 'valor' => $valor]);
        
        /* if($valor){
            return "O nome do produto é $nome, e o seu valor é $valor";        
        }else{
            return "O nome do produto é $nome.";        
        }*/
        
    } 
}
