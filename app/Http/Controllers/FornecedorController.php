<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores= [
            [
                'nome'=>'matheus',
                'status'=>'n',
                'cnpj'=>'0000',
                'ddd'=>'11',
                'telefone'=>'4862-7932'
            ],
            [
                'nome'=>'fabio',
                'status'=>'s',
                'cnpj'=>null,
                'ddd'=>'13',
                'telefone'=>'4862-7932'
            ],
            [
                'nome'=>'matheus',
                'status'=>'n',
                'ddd'=>'12',
                'cnpj'=>'22222',
                'telefone'=>'4862-7932'
            ]
        ];
        return view('app.fornecedor.index', compact('fornecedores'));
    }
    
}
