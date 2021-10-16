<?php

$status = isset($_GET['status']) ? $_GET['status'] : '';
$item = isset($_GET['item']) ? $_GET['item'] : '';

switch ($status) {
  case 'existe':
    $status = '
    <div class="status-erro">
      <p>Usuário já cadastrado!</p>
    </div>
    ';
    break;
  case 'vazio':
    $status = '
    <div class="status-erro">
      <p>Espaços vazios!</p>
    </div>
    ';
    break;
  case 'erro':
    $status = '
    <div class="status-erro">
      <p>Login ou Senha inválidos!</p>
    </div>
    ';
    break;
  case 'excluido':
    $status = '
    <div class="status-erro">
      <p>Registro foi excluído!</p>
    </div>
    ';
    break;
  case 'semacesso':
    $status = '
    <div class="status-erro">
      <p>Você não tem acesso à essa área!!</p>
    </div>
    ';
    break;
  case 'senhaincorreta':
    $status = '
    <div class="status-erro">
      <p>Senha inválida!</p>
    </div>
    ';
    break;
  case 'cadastrado':
    $status = '
    <div class="status">
      <p>Usuário cadastrado!</p>
    </div>
    ';
    break;
  case 'registrado':
    $status = '
    <div class="status">
      <p>Registro realizado!</p>
    </div>
    ';
    break;
  case 'pago':
    $status = '
    <div class="status">
      <p>Pagamento realizado!</p>
    </div>
    ';
    break;
  case 'altlogin':
    $status = '
    <div class="status">
      <p>Seu login foi alterado!</p>
    </div>
    ';
    break;
  case 'altsenha':
    $status = '
    <div class="status">
      <p>Sua senha foi alterada!</p>
    </div>
    ';
    break;
  
  default:
    # code...
    break;
}

