<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Mockery\Generator\StringManipulation\Pass\Pass;

class VotacaoController extends Controller
{
    public function index()
    {
        $candidatos = User::where('candidato','=',1)->get()
            ->sortBy('id');

        $usuario = Auth::user()->votou;

        $pessoa = Auth::user()->name;

        return view('votacao.index', ['candidatos' => $candidatos, 'pessoa' => $pessoa, 'usuario' =>$usuario]);
    }

    public function store($id)
    {
        $pessoa = User::find($id);
        if(isset($pessoa) and $pessoa->candidato){
            if (Auth::user()->votou){
                return redirect()->route('votacao');
            }
            $pessoa->votos += 1;
            $pessoa->save();

            $user = User::find(Auth::user()->id);
            $user->votou = true;
            $user->save();

            return redirect()->route('final');
        }
    }
    public function imprimir()
    {
        $usuario = Auth::user();
        $matricula = DB::connection('souzacambos')->table('colaboradors')->where('cpf','=',$usuario->username)->first()->matriculacolaborador;
        $usuariovoto = Auth::user()->votou;
        return view('votacao.comprovante', ['usuario' => $usuario, 'matricula' => $matricula, 'usuariovoto' => $usuariovoto]);
    }

    public function final()
    {
        $pessoa = Auth::user()->name;
        return view('votacao.final', ['pessoa' => $pessoa]);
    }

}
