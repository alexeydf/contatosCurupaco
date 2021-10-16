<?php

namespace App\Classes;

use \App\Db\Database;
use \PDO;

class Contato{
  public $id;
  public $nome;
  public $email;
  public $assunto;
  public $mensagem;
  public $telefone;
  public $ddd;
  public $data;
  public $situacao;

  public function addContato(){
    $baseDados = new Database('contatos');
    $this->id = $baseDados->insert([
      'nome' => $this->nome,
      'email' => $this->email,
      'assunto' => $this->assunto,
      'mensagem' => $this->mensagem,
      'telefone' => $this->telefone,
      'ddd' => $this->ddd
      ]);
   
    return true;
  }

  public function marcarLido(){
    return (new Database('tb_mensagem'))->update(' id = '.$this->id,'situacao = 1');
  }

  public function excluir(){
    return (new Database('tb_mensagem'))->delete(' id = '.$this->id);
  }

  public function mensagemValida(){
    if (empty($this->nome) || empty($this->email) || empty($this->assunto) || empty($this->mensagem) || empty($this->telefone || empty($this->ddd))) {
      return false;
    }

    return true;
  }

  public static function listarMsg($where = null, $order = null, $limit = null){
    return (new Database('tb_mensagem'))->select($where, $order, $limit)
                                  ->fetchAll(PDO::FETCH_CLASS,self::class);
  }

  public static function debug($var){
    echo '<pre>'; print_r($var); echo "</pre>";
  }

  

}