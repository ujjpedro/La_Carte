<!DOCTYPE html>
<?php 
    require_once "../classes/autoload.php";
    $title = "La'Carte";
    include_once "../conf/default.inc.php";
    require_once "../conf/Conexao.php";
    $procurar = isset($_POST["procurar"]) ? $_POST["procurar"] : ""; 
    $cnst = isset($_POST['cnst']) ? $_POST['cnst'] : 1;
?>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title><?php $title ?></title>
    <link rel="shortcut icon" href="../img/favicon.ico">
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>

      body{
        background-color: #FFFAFA;
        overflow-x: hidden;
      }

      main{
        background-size: cover;
        height: 92vh;
      }

      @font-face {
        font-family: "bellerose";
        src: url(../fonts/bellerose/Bellerose.ttf);
      }

      p{
        font-family: "bellerose";
      }

    </style>

  </head>

  <body>

    <?php
      require_once "menu.php";
    ?>

    <h1>Meu Carrinho</h1>

      <section class="carrinho">

      <div>
        <img src="../img/hamburguer.jpg">
        <p class="textoItensCarrinho">X-Tudo  <br>  R$00,00</p>
      </div>

      <div>
        <img src="../img/pizza2.jpg">
        <p class="textoItensCarrinho">Pizza M Portuguesa <br> R$00,00</p>
      </div>

      <div>
        <img src="../img/bebida.jpg">
        <p class="textoItensCarrinho">Brahma <br> R$00,00</p>
      </div>

      <div>
        <img src="../img/pizza.jpg">
        <p class="textoItensCarrinho">Pizza G Calabresa <br> R$00,00</p>
      </div>

      <div>
        <img src="../img/sobremesa.jpg">
        <p class="textoItensCarrinho">Pudim Frutas Vermelhas <br> R$00,00</p>
      </div>

    </section>

  </body>

</html>