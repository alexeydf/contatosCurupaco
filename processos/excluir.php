<?php

use App\Classes\Contato;

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $contato = Contato::getContato('id',$id);
  $contato->excluir();

  header('location: index.php?menuop=contatos&situacao=0&status=excluido');
    exit;
}
