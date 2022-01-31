<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\PseudoTypes\False_;

class ColaboradorController extends Controller
{
    public function store(){
        $colaboradores = DB::connection('souzacambos')->table('colaboradors')->select(
            'matriculacolaborador',
            'nomecolaborador',
            'cpf',
        )->where('status','=','0')->get();

        foreach($colaboradores as $item){
            $user = User::where('username','=',$item->cpf)->first();
            if(!isset($user)){
                $user = User::create([
                    'name' => $item->nomecolaborador,
                    'candidato' => false,
                    'votou' => false,
                    'votos' => 0,
                    'username' => $item->cpf,
                    'password' => bcrypt($item->matriculacolaborador),
                ]);
            }
        }
    }

    public function branco_nulo() {
        $user = User::where('username', '=', 'BRANCO')->first();
        if(!isset($user)) {
            $created = User::create([
                'name' => 'BRANCO',
                'candidato' => true,
                'votou' => false,
                'votos' => 0,
                'username' => 'BRANCO',
                'password' => bcrypt('WSXC@mb0s3264'),
            ]);
        }
        $user = User::where('username', '=', 'NULO')->first();
        if(!isset($user)) {
            $created = User::create([
                'name' => 'NULO',
                'candidato' => true,
                'votou' => false,
                'votos' => 0,
                'username' => 'NULO',
                'password' => bcrypt('WSXC@mb0s3264'),
            ]);
        }
        return response()->json('Usuários criados');
    }
}
