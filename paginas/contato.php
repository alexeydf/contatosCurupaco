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
    <a href="#"><span class="icon-bin"></span></a>
  </div>
  
  <div class="contatos-corpo">
    <p class="data">Data: <span><?= data($contato->data) ?></span></p>
    <p class="nome">Nome: <span><?= $contato->nome ?></span></p>
    <p class="email">Assunto: <span><?= $contato->assunto ?></span></p>
    <p class="email">E-mail: <span><?= $contato->email ?></span></p>
    <p class="telefone">Telefone: <span>(<?= $contato->ddd ?>) <?= $contato->telefone ?></span></p>

    <div class="mensagem">
      <h4>Mensagem:</h4>
      <p><?= $contato->mensagem ?></p>
    </div>
  </div>
</section>

<div class="modal-excluir">
  <header class="modal-header">
    <h4>Excluir</h4>
    <a href=""><span class="icon-cross"></span></a>
  </header>
  
  <p>Deseja realmente excluir o contato?</p>

  <div class="modal-btns">
    <a href="index.php?menuop=excluir&id=<?= $contato->id ?>" class="btn">Excluir</a>
    <a href="index.php?menuop=contato&id=<?= $contato->id ?>" class="btn">Cancelar</a>
  </div>
</div>

<script>
  const $modal = document.querySelector('.modal-excluir');
  const $btnExcluir = document.querySelector('.icon-bin');
  const $contato = document.querySelector('.contato');

  $btnExcluir.addEventListener('click', ()=>{
    $modal.classList.add('modal-visivel');
    $contato.classList.add('contato-escuro');
  })
</script>