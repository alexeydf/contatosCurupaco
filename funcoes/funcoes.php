<?php


function formatar($valor){
  
  $valor = number_format($valor,2,',','.');

  return $valor;
}

function data($data){
  $data = date('d/m/Y à\s H:i:s',strtotime($data));

  return $data;
}

function debug($var){
  echo '<pre>'; print_r($var); echo "</pre>"; exit;
}





