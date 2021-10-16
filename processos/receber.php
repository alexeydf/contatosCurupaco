<?php

use App\Classes\Contato;


if(isset($_POST['nome'], $_POST['ddd'], $_POST['telefone'], $_POST['email'], $_POST['assunto'], $_POST['mensagem'])){
  $contato = new Contato;
  $contato->nome = $_POST['nome'];
  $contato->ddd = $_POST['ddd'];
  $contato->telefone = $_POST['telefone'];
  $contato->email = $_POST['email'];
  $contato->assunto = $_POST['assunto'];
  $contato->mensagem = $_POST['mensagem'];

  if($contato->mensagemValida()){
    $contato->addContato();

    header('location: index.php?menuop=formulario&status=enviado');
    exit;
  }else{
    header('location: index.php?menuop=formulario&status=vazio');
    exit;
  }
}