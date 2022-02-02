<?php

namespace App\Http\Controllers;

use App\Models\User;
    use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller

{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $cpf = $request->username;
        $pessoa = User::where('username','=',$cpf)->first();
        if(isset($pessoa)){
            if(Auth::attempt([
                'username' => $pessoa->username,
                'password' => $request->password,
            ])) {
                return redirect()->route('votacao');
            }else{
                return redirect()->route('login')->with('msg', 'CPF OU SENHA INCORRETOS,TENTE NOVAMENTE.');
            }
        }
        return redirect()->route('login')->with('msg', 'CPF OU SENHA INCORRETOS,TENTE NOVAMENTE.');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
