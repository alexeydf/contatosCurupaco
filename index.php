<?php

require ('vendor/autoload.php');
require ('funcoes/funcoes.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contatos Curupacu Brasil 1.0</title>

  <link rel="stylesheet" href="css/style.css?<?php echo rand(1, 1000); ?>">
</head>

<body>
  <header class="top-header">
    <a href="index.php?menuop=formulario">Formulário</a>
    <a href="index.php?menuop=lista">Contatos</a>
  </header>

  <main>
    <?php
    $menuop = (isset($_GET['menuop'])) ? $_GET['menuop'] : 'home';
    switch ($menuop) {
      case 'lista':
        include("paginas/lista.php");
        break;
      case 'formulario':
        include("paginas/formulario.php");
        break;
      case 'receber':
        include("processos/receber.php");
        break;

      default:
        include("paginas/formulario.php");
        break;
    }
    ?>
  </main>
</body>

</html>