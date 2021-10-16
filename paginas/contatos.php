<?php

use App\Classes\Contato;

if(isset($_GET['situacao'])){
  $situacao = $_GET['situacao'];

  $contatos = Contato::listar(' situacao = '.$situacao);
  $lista = '';

  foreach($contatos as $contato){
    $lista .= $contato->texto();
  }
}


?>

<section class="contatos">
  <div class="titulo">
    <h3>Contatos</h3>
  </div>

  <?= $lista ?>
  
</section>