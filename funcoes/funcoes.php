<?php


function formatar($valor){
  
  $valor = number_format($valor,2,',','.');

  return $valor;
}

function data($data){
  $data = date('d/m/Y',strtotime($data));

  return $data;
}

function debug($var){
  echo '<pre>'; print_r($var); echo "</pre>"; exit;
}

function calculaPowerRoubo($forcaArmaJogador,$powerJogador,$powerArmaJogador,$inteligencia,$forca,$carisma,$resistencia,$bonusColeteJogador){
  $bonusArma = 0;
  $bonusColete = 0;

  $bonusArma = $forcaArmaJogador + ($powerJogador * ($powerArmaJogador));

  $bonusColete = $resistencia * $bonusColeteJogador;

  $powerJogador = (($inteligencia + $forca + $carisma + $resistencia)/4) * (70/100) + $bonusArma + $bonusColete;

  return $powerJogador;

}



//number_format($granaJogador,0,'','.')