<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedoresController extends Controller
{
    function show(){
        $fornecedor = Fornecedor::all();
        return view('fornecedores_show', ['fornecedor' => $fornecedor]);
    }
    function novo(){
        return view('fornecedores_new');
    }
    function inserir(Request $req){
        $fornecedor = new Fornecedor();
        $fornecedor->nome = $req->nome;
        $fornecedor->rsocial= $req->rsocial;
        $fornecedor->cnpj=$req->cnpj;

        $fornecedor->save();
        return redirect()->route('fornecedores.show');
    }
    function alterar($id){
        $fornecedor = Fornecedor::findOrFail($id);
        return view('fornecedores_edit',['fornecedor'=>$fornecedor]);
    }
    function editar(Request $req, $id){
        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->nome = $req->nome;
        $fornecedor->rsocial= $req->rsocial;
        $fornecedor->cnpj=$req->cnpj;

        $fornecedor->save();
        return redirect()->route('fornecedores.show');
    }
    function excluir($id){
        $fornecedor = Fornecedor::findOrFail($id);
        $fornecedor->delete();

        return redirect()->route('fornecedores.show');
    }
}