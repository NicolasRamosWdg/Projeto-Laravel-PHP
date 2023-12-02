<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produto;


class produtos extends Controller
{
    //Listar produto
    public function index(){
        $produtos = produto::all(); //buscar todos os registro no banco
        return view("produtos.index",compact("produtos"));
    }

    public function cadastro(){
        return view("produtos.cadastro");
    }

    public function novo(Request $req){
        $nome = $req->nome;
        $preco = $req->preco;
        $descricao = $req->descricao;
        $produtos = new produto();
        $produtos->nome = $nome;
        $produtos->preco = $preco;
        $produtos->descricao = $descricao;  
        
        if($produtos->save()){
            $mensagem = "Produto $nome inserido com sucesso";
        }else{
            $mensagem = "Não foi possível inserir";
        }
        return view("produtos.resultado",compact("mensagem")); 
    }
    
    public function telaAlteracao($id){
        $produto = produto::find($id); // find busca o atributo de chave primária
        return view("produtos.alterar", ["u" => $produto]);
    }

    public function alterar(Request $req, $id){
        $nome = $req->input("nome");
        $preco = $req->input("preco");
        $descricao = $req->input("descricao");

        $produtos = produto::find($id);
        $produtos->nome = $nome;
        $produtos->preco = $preco;
        $produtos->descricao = $descricao;

        if ($produtos->save()){
            $msg = "Produto atualizado com sucesso";
        }else{
            $msg = "Produto não foi atualizado";
        }
        return view("produtos.resultado", ["mensagem" => $msg]);
    }

    public function excluir($id){
        $produtos = produto::find($id);
        
        if($produtos->delete()){ 
            $msg = "Produto excluído com sucesso";
        }else{
            $msg = "Não foi possível excluir o Produt";
        }
        return redirect()->route('produtos.index');
    }

}
