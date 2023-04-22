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
        $produtos = produto::orderby('id', 'asc')->paginate(500000);       
        return view('produtos.index', ['produtos'=> $produtos]);
    }

    public function create(){
        return view('produtos.create');
    }


    public function insert(Request $request){
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->valor = $request->valor;
        $produto->estoque = $request->estoque;
        $produto->descricao = $request->descricao;
        $produto->descricao2 = $request->descricao2;
        $produto->save();
        return redirect()->route('produtos.inserir');
    }

    /**
     * Summary of show
     * @param mixed $nome
     * @param mixed $valor
     * @param mixed $estoque
     * @return string
     */

     public function show($id){
        $produto = Produto::find($id);
        return view('produtos.show', ['produto'=> $produto]);       
                
    }

    public function edit(produto $produto){
        return view('produtos.edit', ['produto'=> $produto]);     
                
    }

    public function editar(Request $request){
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->valor = $request->valor;
        $produto->estoque = $request->estoque;
        $produto->descricao = $request->descricao;
        $produto->descricao2 = $request->descricao2;
        $produto->save();
        return redirect()->route('produtos');

    }

    public function delete(produto $produto){
        /* $produto->delete();
        return redirect()->back(); */   
                
    }

    public function modal($id){
        $produtos = produto::orderby('id', 'asc')->paginate();
        return view('produtos.index', ['produtos'=> $produtos, 'id' => $id]);
    }


    /* public function show($nome, $valor = null, $estoque){

        return view('produtos.show', ['nome'=> $nome, 'valor' => $valor, 'estoque'=>$estoque]);
        
        if($valor){
            return "O nome do produto é $nome, e o seu valor é $valor";        
        }else{
            return "O nome do produto é $nome.";        
        }
        
    } */ 
}
