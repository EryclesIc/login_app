<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RegistroController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function dados(Request $request){
        $nome= $request->nome;
        $cpf = $request->cpf;
        $rg = $request->rg;
        $matricula = $request->matricula;
        $email = $request->email;
        $senha = $request->senha;
        $telefone = $request->telefone;
        $orgao = $request->orgao;
        $perfil = $request->perfil;
        $numero_cnh = $request->numero_cnh;
        $categoria_cnh = $request->categoria_cnh;
        $data_val_cnh = $request->data_cnh;

        return redirect('/login');
    }
 
}
