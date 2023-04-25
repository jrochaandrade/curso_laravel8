<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Models\produto;

class UsuariosController extends Controller
{
    public function login(Request $request){
        
        $email = $request->email;
        $senha = $request->senha;
        
        $usuarios = Usuario::where('email', '=', $email)->where('senha', '=', $senha)->first();
            

        if(@$usuarios -> id != null){            
            @session_start();
            $_SESSION['id_usuario'] = $usuarios->id;
            $_SESSION['nome_usuario'] = $usuarios->nome;
            $_SESSION['nivel_usuario'] = $usuarios->nivel;

            if($_SESSION['nivel_usuario'] == 'admin'){

                return view('produtos.create');
            }else{

                $produtos = Produto::orderby('id', 'asc')->paginate(50000);
                return view('produtos.index', ['produtos' => $produtos]);

            }

            
           
        }else{
            echo "<script language='javascript'>window.alert('Usuário ou senha incorreto!') </script>";
            return view('home');
        }
                
    }

    public function logout(){
        @session_start();
        @session_destroy();
        return view('home');
        
                
    }
}
