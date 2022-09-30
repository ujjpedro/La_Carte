<!DOCTYPE html>
<?php 
    include_once "../../../La Carte/conf/default.inc.php";
    require_once "../../../La Carte/conf/Conexao.php"; 
?>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hambúrgueres</title>
    <link rel="shortcut icon" href="../../img/icone.png">
    <link rel="stylesheet" href="h1.css"/>
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
        src: url(../../fonts/bellerose/Bellerose.ttf);
      }
    </style>
    <script>
      function addFuncao(qtd){
            var prd1 = parseInt(document.getElementById("prd1").innerHTML);
            if ('+1') {
                document.getElementById("prd1").innerHTML = ++prd1;  
            }
        }

      function remFuncao(qtd){
            var prd1 = parseInt(document.getElementById("prd1").innerHTML);
            if ('-1' && prd1 > 1) {
                document.getElementById("prd1").innerHTML = --prd1;
            }
        }
    </script>
  </head>

  <body>
    <header>
      <nav>
        <a class="ftlogo" href="../../index.php"><img src="../../img/logo2.png" style="width: 8em; margin-top: 4.2px; margin-left: 1.5em; "></a>
        <ul>
        <li class="espacamentoSino">
        <a class="notificacao" href="#"><img src="../../img/notificacao.png" style="width: 1.1em; margin-top: 4px; "></a>
        </li>
        <li class="espacamentoCar">
        <a class="carrinho" href="#"><img src="../../img/carrinho.png" style="width: 1em; margin-top: 4.2px; "></a>
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
    </section><div class="imgP">
      <section class="categorias">
        <div>
          <img src="../../img/hamburguer.jpg" style="border-radius: 10px;">
          <br>
        </div>
      </section>
    </div>
    <p class="textoCategoria">X-Tudo</p>

    <?php
    $pdo = Conexao::getInstance(); 
    
    $consulta = $pdo->query("SELECT descricao, ingredientes, preco FROM pratos
                            WHERE id = 1");
                    
                    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {  
    ?>
        
    <div class="descricao">
        <h3>Descrição:</h3>
        <p><?php echo $linha['descricao'];?></p>
        <h3>Ingredientes:</h3>
        <p><?php echo $linha['ingredientes'];?></p>
        <h3>Preço:</h3>
        <p><?php echo "R$ ". $linha['preco'];?></p>
        <h3>Quantidade:</h3>
        <p id="prd1">1</p>
    </div>
      <div class="btn">
        <button class="dash" onclick="remFuncao('-1')"><img src="../../img/dash.svg" alt=""></button>
        <button class="plus" onclick="addFuncao('+1')" class="prd1"><img src="../../img/plus.svg" alt=""></button>
      </div>
    <?php
                    }
    ?>
    <br>
      <button class="fim">Adicionar</button>
    <script src="../../home/navMobile.js"></script>
  </body>
</html>