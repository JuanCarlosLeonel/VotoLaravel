<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Generator\StringManipulation\Pass\Pass;

class VotacaoController extends Controller
{
    public function index()
    {
        $candidatos = User::where('candidato','=',1)->get()
            ->sortBy('id');

        $pessoa = Auth::user()->name;

        return view('votacao.index', ['candidatos' => $candidatos, 'pessoa' => $pessoa]);
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

            return view('votacao.final', ['user' => $user]);
        }
    }

}
