<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hambúrgueres</title>
    <link rel="shortcut icon" href="../img/icone.png">
    <link rel="stylesheet" href="../css/hamburguer.css" />
    <style>
      body{
        background-color: #FFFAFA;
        overflow-x: hidden;
      }
    
      main{
        background-size: cover;
        height: 92vh;
      }
      
      .mesa{
        border: 0.1em solid #FF9045;
        border-radius: 0.2em;
        padding: 0.5em;
      }

      @font-face {
        font-family: "bellerose";
        src: url(../fonts/bellerose/Bellerose.ttf);
      }
    </style>
  </head>

  <body>
    <header>
      <nav>
        <a class="ftlogo" href="../index.php"><img src="../img/logo2.png" style="width: 8em; margin-top: 4.2px; margin-left: 1.5em; "></a>
        <ul>
        <li class="espacamentoSino">
        <a class="notificacao" href="#"><img src="../img/notificacao.png" style="width: 1.1em; margin-top: 1em; "></a>
        </li>
        <li class="espacamentoCar">
        <a class="carrinho" href="#"><img src="../img/carrinho.png" style="width: 1em; margin-top: 1em; "></a>
        </li>
        </ul>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
        <ul class="nav-list">
          <li class="mesa"><a href="#">Mesa</a></li>
          <li><a href="#">Cadastre-se</a></li>
          <li><a href="#">Avaliar</a></li>
          <center>
            <li><a href="#" style="left: 2em;">Reclamações e Comentários</a></li>
          </center>
        </ul>
      </nav>
    </header>

      <h1>Hambúrgueres</h1>

    <section class="categorias">
      <div>
        <a href="hamburguer/indexH1.php">
        <img src="../img/hamburguer.jpg">
        <p class="textoCategoria">X-Tudo &ensp; &ensp; &ensp; &ensp; R$00,00</p>
        </a>
      </div>
      <div>
        <img src="../img/hamburguer.jpg">
        <p class="textoCategoria">X-Salada &ensp; &ensp; &ensp; R$00,00</p>
      </div>
      <div>
        <img src="../img/hamburguer.jpg">
        <p class="textoCategoria">X-Bacon &ensp; &ensp; &ensp; R$00,00</p>
      </div>
      <div>
        <img src="../img/hamburguer.jpg">
        <p class="textoCategoria">X-Chicken &ensp; &ensp; &ensp; R$00,00</p>
      </div>
      <div>
        <img src="../img/hamburguer.jpg">
        <p class="textoCategoria">Vegetariano &ensp; &ensp; R$00,00</p>
      </div>
      <div>
        <img src="../img/hamburguer.jpg">
        <p class="textoCategoria">Vegano &ensp; &ensp; &ensp; &ensp; R$00,00</p>
      </div>
    </section>
    
    <script src="../home/navMobile.js"></script>
  </body>
</html>


