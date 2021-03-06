<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $dados = User::where('candidato','=',1)->get()
            ->sortByDesc('votos');
        $pessoas = User::where('votou','=',1)->paginate(700);

        $admin = Auth::user()->username;


        $contador = User::select('id')->where('votou','=',1);
        $cont = $contador->count('id');

        $contadorcola = User::select('id');
        $contcola = $contadorcola->count('id') -2;

        $porcentagem = ($cont * 100) / $contcola;


        return view('admin.indexadmin', ['dados' => $dados, 'pessoas' => $pessoas, 'cont'=> $cont, 'contcola'=>$contcola, 'porcentagem'=>$porcentagem, 'admin'=>$admin]);
    }
}
