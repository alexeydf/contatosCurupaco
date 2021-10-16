<?php

use App\Classes\Contato;

if(isset($_GET['id'])){
  $id = $_GET['id'];

  $contato = Contato::getContato('id', $id);

  $contato->situacao = 1;
  $contato->marcarLido();  
}

?>
<section class="contato">
  <div class="voltar">
    <a href="index.php?menuop=contatos&situacao=0" class="btn"><span class="icon-backward2"></span> Voltar</a>
  </div>
  <div class="contato-header">
    <h3><?= $contato->nome ?></h3>
    <p class="data"><span><?= data($contato->data) ?></span></p>
    <a href=""><span class="icon-bin"></span></a>
  </div>
  
  <div class="contatos-corpo">
    <p class="data">Data: <span><?= data($contato->data) ?></span></p>
    <p class="nome">Nome: <span><?= $contato->nome ?></span></p>
    <p class="email">Assunto: <span><?= $contato->assunto ?></span></p>
    <p class="email">E-mail: <span><?= $contato->email ?></span></p>
    <p class="telefone">Telefone: <span><?= $contato->telefone ?></span></p>

    <div class="mensagem">
      <h4>Mensagem:</h4>
      <p><?= $contato->mensagem ?></p>
    </div>

    <!--<div class="acoes">
      <a href="">Marcar como lido</a>
      <a href="">Excluir</a>
    </div>-->
  </div>
  </div>
</section>