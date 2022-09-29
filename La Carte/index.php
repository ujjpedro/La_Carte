<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>La Carte</title>
    <link rel="stylesheet" href="css/estilos.css" />
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
      /* @font-face {
        font-family: "austria";
        src: url(fonts/over/KGStartingOver.ttf); */
        @font-face {
        font-family: "bellerose";
        src: url(fonts/bellerose/Bellerose.ttf);
      }
    </style>
  </head>

  <body>
    <header>
      <nav>
        <!-- <a class="logo" href="index.php" style="font-family: austria; margin-left: 1em;">Eco Menu</a> -->
        <!-- <a class="ftlogo" href="#"><img src="img/eco.png" style="width: 5em; margin-top: 4.2px; margin-left: 1.5em; "></a> -->
        <a class="ftlogo" href="#"><img src="img/logo2.png" style="width: 8em; margin-top: 4.2px; margin-left: 1.5em; "></a>
        <ul>
        <li class="espacamentoSino">
        <a class="notificacao" href="#"><img src="img/notificacao.png" style="width: 1.1em; margin-top: 4px; "></a>
        </li>
        <li class="espacamentoCar">
        <a class="carrinho" href="#"><img src="img/carrinho.png" style="width: 1em; margin-top: 4.2px; "></a>
        </li>
        </ul>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <li class="mesa"><a href="#">Mesa 1</a></li>
          <li><a href="#">Cadastre-se</a></li>
          <li><a href="#">Avaliar</a></li>
          <center>
          <li style="margin-left: 1.7em;"><a href="#">Reclamações <br>e comentários</a></li>
          </center>
        </ul>
      </nav>
    </header>

      <h1>Categorias</h1>

    <section class="categorias">
      <div>
        <a href="categorias/indexHamburguer.php">
        <img src="img/hamburguer.jpg">
        <p class="textoCategoria">Hambúrgueres</p>
        </a>
      </div>
      <div>
        <img src="img/pizza2.jpg">
        <p class="textoCategoria">Pizzas</p>
      </div>
      <div>
        <img src="img/porcoes.jpg">
        <p class="textoCategoria">Porções</p>
      </div>
      <div>
        <img src="img/sobremesa.jpg">
        <p class="textoCategoria">Sobremesas</p>
      </div>
      <div>
        <img src="img/bebida3.jpg">
        <p class="textoCategoria">Bebidas</p>
      </div>
      <div>
        <img src="img/combo.jpg">
        <p class="textoCategoria">Combos</p>
      </div>
    </section>

<!-- Carousel -->

      <h1 class="promocoes">Promoções Diárias</h1>

      <br>
  <center>
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
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/pizza.jpg">
      <div class="carousel-caption">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/pizza.jpg">
      <div class="carousel-caption">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
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
</center>
    <script src="home/navMobile.js"></script>
  </body>
</html>