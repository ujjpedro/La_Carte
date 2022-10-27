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
      <div class="carousel">
        <h1>Promoções Diárias</h1>
        <div class="fotosCarousel">
          <a href=""><img src="../img/bebida.jpg">
              <h2>Segunda-Feira</h2>
              <p>Na compra de uma pizza GG ganhe um refrigerante 1,5L</p>
              </a>
          <a href=""><img src="../img/combo.jpg">
              <h2>Terça-Feira</h2>
              <p>Todos os combos com 20% de desconto</p>
              </a>
          <a href=""><img src="../img/hamburguer.jpg">
              <h2>Quarta-Feira</h2>
              <p>Hamburguer + Batata M só R$ 23,00</p>
              </a>
          <a href=""><img src="../img/pizza2.jpg">
              <h2>Quinta-Feira</h2>
              <p>Todas as pizzas em dobro</p>
              </a>
          <a href=""><img src="../img/sobremesa.jpg">
              <h2>Sexta-Feira</h2>
              <p>Sobremesas a partir de R$ 15,99</p>
              </a>
        </div>
      </div>
    </center>

      <!--
      <h1 class="promocoes">Promoções Diárias</h1>
      <br>
      <center id="carousel">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/pizza.jpg">
          <div class="carousel-caption">
              <h2>Segunda-Feira</h2>
              <p>Todas as pizzas em dobro</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/sobremesa.jpg">
          <div class="carousel-caption">
                <h2>Terça-Feira</h2>
                <p>Sobremesas a partir de R$ 15,99</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/bebida.jpg">
          <div class="carousel-caption">
                <h2>Quarta-Feira</h2>
                <p>Na compra de uma pizza GG ganhe um refrigerante 1,5L</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    </center> -->
    <!-- <script src="home/navMobile.js"></script> -->
  </body>
</html>