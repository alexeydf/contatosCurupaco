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

  public function texto(){
    $texto = '
    <div class="contatos-conteudo">
      <a href="index.php?menuop=contato&id='.$this->id.'">
        <header class="contatos-header">
          <p class="nome">'.$this->nome.'</p>
          <p class="assunto">'.$this->assunto.'</p>
          <p class="data">'.data($this->data).'</p>
        </header>
      </a>
    ';

    return $texto;
  }

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

  public static function getContato($chave, $valor){
    return (new Database('contatos'))->select(' '.$chave.' = "'.$valor.'"')->fetchObject(self::class);
  }

  public function marcarLido(){
    return (new Database('contatos'))->update(' id = ' . $this->id, [
      'situacao' => $this->situacao
    ]);
  }

  public function excluir(){
    return (new Database('contatos'))->delete(' id = '.$this->id);
  }

  public function mensagemValida(){
    if (empty($this->nome) || empty($this->email) || empty($this->assunto) || empty($this->mensagem) || empty($this->telefone || empty($this->ddd))) {
      return false;
    }

    return true;
  }

  public static function listar($where = null, $order = null, $limit = null){
    return (new Database('contatos'))->select($where, $order, $limit)
                                  ->fetchAll(PDO::FETCH_CLASS,self::class);
  }


  

}