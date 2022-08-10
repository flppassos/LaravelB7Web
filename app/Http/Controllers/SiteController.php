<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //

    public function index()
    {
        $nome = 'Felipe Passos';
        $idade = 28;

        return view('index', compact('nome', 'idade'));
    }

    public function sair()
    {
        return view('sair');
    }

    public function quantidade(Request $request)
    {
        $q = $request->qtd;

        return view('usuarios', compact('q'));
    }

    public function exec1() {

        $pessoas = [
            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Alessandro',
                'birth' => '29/01/90',
                'idade' => 29],

              [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Bonieky',
                'birth' => '10/11/1933',
                'idade' => 90],

              [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Maria',
                'birth' => '01/01/2020',
                'idade' => 2]
        ];

        $dados['pessoas'] = $pessoas;

        return view('exec1', $dados);
    }

    public function exerc2() {

        $numero = 1;


        $url = 'https://i.pravatar.cc/150?img='.$numero;


        $dados['url'] = $url;

        return view('exec2', $dados);
    }
}
