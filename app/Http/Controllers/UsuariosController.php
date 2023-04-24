<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function login(Request $request){
        
        $email = $request->email;
        $senha = $request->senha;
        
        return $email;
                
    }
}
