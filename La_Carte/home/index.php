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
    <h1>Categorias</h1>
      <section class="categorias">
        <?php
            $lista = Categoria::listar($cnst, $procurar);
            foreach ($lista as $linha) {
        ?>
        <div>
          <a href="../categorias/indexPratos.php?acao=ver&id=<?php echo $linha['id'];?>">
            <img src="<?php echo $linha['imagem']?>">
          </a>
            <p class="textoCategoria"><?php echo $linha['nome'];?></p>
          </a>
        </div>
        <?php } ?>
      </section>
    
<!-- Carousel -->
    <center>
      <div class="tituloCarousel">
        <h2>Promoções Diárias</h2>
          <div class="carousel">
            <div class="fotosCarousel">
              <a href=""><img src="../img/bebida.jpg">
                  <h3>Segunda-Feira</h3>
                  <p>Na compra de uma pizza GG ganhe um refrigerante 1,5L</p>
                  </a>
              <a href=""><img src="../img/combo.jpg">
                  <h3>Terça-Feira</h3>
                  <p>Todos os combos com 20% de desconto</p>
                  </a>
              <a href=""><img src="../img/hamburguer.jpg">
                  <h3>Quarta-Feira</h3>
                  <p>Hamburguer + Batata M só R$ 23,00</p>
                  </a>
              <a href=""><img src="../img/pizza2.jpg">
                  <h3>Quinta-Feira</h3>
                  <p>Todas as pizzas em dobro</p>
                  </a>
              <a href=""><img src="../img/sobremesa.jpg">
                  <h3>Sexta-Feira</h3>
                  <p>Sobremesas a partir de R$ 15,99</p>
                  </a>
            </div>
          </div>
      </div>
    </center>

  </body>
</html>