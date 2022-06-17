<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    public function login()
    {
        return view('session.login');
    }

    public function autenticar(Request $request)
    {
        $res = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if (!$res) {
            return redirect('/login')->with('alert', 'Email ou senha incorretos.');
        }

        $infoUsuario = User::where(['email' => $request->email])->first();

        $request->session()->regenerate();
        session()->put('autenticado', true);
        session()->put('id', $infoUsuario->id);
        session()->put('nome', $infoUsuario->name);
        session()->put('email', $infoUsuario->email);
        session()->put('password', $infoUsuario->password);

        return redirect('/geral');
    }

    public function desconectar()
    {
        session()->flush();
        return redirect('/geral');
    }
}
