<?php

use App\Classes\Contato;

if(isset($_GET['situacao'])){
  $situacao = $_GET['situacao'];
  $class1 = '';
  $class2 = '';
  switch ($situacao) {
    case '0':
      $class1 = 'ativo';
      $class2 = '';
      break;
    case '1':
      $class1 = '';
      $class2 = 'ativo';
      break;
    
    default:
      # code...
      break;
  }

  $contatos = Contato::listar(' situacao = '.$situacao, ' data DESC ');
  $lista = '';

  foreach($contatos as $contato){
    $lista .= $contato->texto();
  }
}

$lista = strlen($lista) ? $lista : '<p class="sem-msg">Você não tem novas mensagens!</p>'

?>

<section class="contatos">
  <div class="titulo">
    <h3>Contatos</h3>
  </div>

  <nav class="contatos-menu">
    <a href="index.php?menuop=contatos&situacao=0" class="<?= $class1 ?>">Não lidas</a>
    <span>|</span>
    <a href="index.php?menuop=contatos&situacao=1" class="<?= $class2 ?>">Lidas</a>
  </nav>

  <?= $lista ?>
  
</section>