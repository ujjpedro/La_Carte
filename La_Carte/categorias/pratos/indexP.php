<!DOCTYPE html>
<?php 
    include_once "../../conf/default.inc.php";
    require_once "../../conf/Conexao.php";
    require_once "../../classes/autoload2.php";
    
    $acao = isset($_GET['acao']) ? $_GET['acao'] : "";
    if ($acao == 'ver'){
        $id = isset($_GET['id']) ? $_GET['id'] : "";
    if ($id > 0)
        $prat = new Pratos("", "", "", "", "", "", "", "");
        $dados = $prat->listar(1, $id);
    }
?>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hambúrgueres</title>
    <link rel="shortcut icon" href="../../img/favicon.ico">
    <link rel="stylesheet" href="p1.css"/>
    <style>
      body{
        background-color: #FFFAFA;
        overflow-x: hidden;
      }
    
      main{
        background-size: cover;
        height: 92vh;
      }

      img{
        border-radius: 6px;
      }
      
      .mesa{
        border: 0.1em solid #FF9045;
        border-radius: 0.2em;
        padding: 0.5em;
      }

      .av{
        font-family: system-ui, -apple-system, Helvetica, Arial, sans-serif;
        font-size: 1em;
        text-align: center;
        color: #FFFAFA;
      }

      @font-face {
        font-family: "bellerose";
        src: url(../../fonts/bellerose/Bellerose.ttf);
      }

      p{
        font-family: "bellerose";
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
    <?php
      require_once "menuP1.php";
      $pdo = Conexao::getInstance();
        $consulta = $pdo->query("SELECT * FROM pratos WHERE id = $id"); 
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
    ?>
    </section>
      <div class="imgP">
        <section class="categorias">
          <div>
            <img src="<?php echo "../".$linha['imagem']?>"><br> 
            <p class="av">Gostaria de avaliar <br> &ensp;
             este prato? <a href="../../home/clfPrat/avaliarPrat.php?nome=<?php echo $linha['nome']?>" style="font-size: 1em; color: #D97904;">Avaliar</a></p>
          </div>
        </section>
      </div>
      <p class="textoCategoria"><?php echo $linha['nome']; } ?></p>

    <?php
        $pdo = Conexao::getInstance(); 
        $consulta = $pdo->query("SELECT descricao, ingredientes, preco FROM pratos WHERE id = $id"); 
              while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {  
    ?>
        
    <div class="descricao">
        <h4 style="display: inline-block;">Descrição:</h4>
          <p style="display: inline-block; font-size: 1em;"><?php echo $linha['descricao'];?></p>
        <br>

        <h4 style="display: inline-block;">Ingredientes:</h4>
          <p style="display: inline-block; font-size: 1em;"><?php echo $linha['ingredientes'];?></p>
        <br>

        <h4 style="display: inline-block;">Preço:</h4>
          <p style="display: inline-block; font-size: 1em;"><?php echo "R$ ". $linha['preco'];?></p>

        <h4>Quantidade:</h4>
          <h4 id="prd1">1</h4>
    </div>
      <div class="btn">
        <button class="plus" onclick="addFuncao('+1')" class="prd1"><img src="../../img/plus.svg" alt=""></button>
        <button class="dash" onclick="remFuncao('-1')"><img src="../../img/dash.svg" alt=""></button>
      </div>
    <?php
                    }
    ?>
      <button class="fim">Adicionar</button>
    <script src="../../home/navMobile.js"></script>
  </body>
</html>