<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{

    // função para salvar o cliente vindo os dados do front.
    public function salvar(Request $request){
        $dados = $request->all();

        if(empty($dados['id'])){
            $cliente                        = new Cliente();
            $cliente->nome                  = $dados['nome'];
            $cliente->data_nascimento       = $dados['data_nascimento'];
            $cliente->sexo                  = $dados['sexo'];
            $cliente->cep                   = $dados['cep'];
            $cliente->endereco              = $dados['endereco'];
            $cliente->numero                = $dados['numero'];
            $cliente->complemento           = $dados['complemento'];
            $cliente->bairro                = $dados['bairro'];
            $cliente->estado                = $dados['estado'];
            $cliente->cidade                = $dados['cidade'];
            $cliente->save();
        }else{
            $cliente                        = Cliente::where('id',$dados['id'])->first();
            $cliente->nome                  = $dados['nome'];
            $cliente->data_nascimento       = $dados['data_nascimento'];
            $cliente->sexo                  = $dados['sexo'];
            $cliente->cep                   = $dados['cep'];
            $cliente->endereco              = $dados['endereco'];
            $cliente->numero                = $dados['numero'];
            $cliente->complemento           = $dados['complemento'];
            $cliente->bairro                = $dados['bairro'];
            $cliente->estado                = $dados['estado'];
            $cliente->cidade                = $dados['cidade'];
            $cliente->save();
        }

        if($cliente->id){
            $retorno = array(
                'status' => '1',
                'msg'    => 'Cliente salvo com sucesso.'
            );
        }else{
            $retorno = array(
                'status' => '0',
                'msg'    => 'Erro ao salvar cliente.'
            );
        }

        return ($retorno);
    }

    // lista todos os clientes
    public function listar(){
        $clientes = Cliente::get();

        return ($clientes);
    }

    // retorna o cliente por id
    public function buscaClientePorId($id){
        $cliente = Cliente::where('id',$id)->first();

        return ($cliente);
    }

    // função para deletar o cliente
    public function deletar($id){
        $cliente = Cliente::find($id);

        if($cliente->delete()){
            $retorno = array(
                'status' => '1',
                'msg'    => 'Cliente deletado com sucesso.'
            );
        }else{
            $retorno = array(
                'status' => '0',
                'msg'    => 'Erro ao deletar cliente.'
            );
        }

        return $retorno;
    }
}
