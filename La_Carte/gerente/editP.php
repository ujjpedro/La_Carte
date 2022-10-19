<!DOCTYPE html>
<?php 
    require_once "../classes/autoload.php";
    $title = "Pratos";
    include_once "../conf/default.inc.php";
    require_once "../conf/Conexao.php";
    $imagem = isset($_GET['imagem']) ? $_GET['imagem'] : "";
    $nome = isset($_GET['nome']) ? $_GET['nome'] : "";
    $gerente = isset($_GET['gerente_id']) ? $_GET['gerente_id'] : "";
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
    <title><?php echo $title ?></title>
    <link rel="shortcut icon" href="../img/favicon.ico">
    <link rel="stylesheet" href="../css/pratos.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script> -->
    <script>
        function excluirRegistro(url){
            if (confirm("Confirma Exclusão?"))
                location.href = url;
        }
    </script>
    <style>
      body{
        background-color: #FFFAFA;
        overflow-x: hidden;
      }

      @font-face {
        font-family: "bellerose";
        src: url(../fonts/bellerose/Bellerose.ttf);
      }

      .add{
        background-color: #590202;
        opacity: 80%;
        border-radius: 10px;
        padding: 5%;
      }
    </style>
  </head>
  <body>
    <?php
      require_once "menuG.php";
    ?>
    <h1>Pratos</h1>
      <section class="categorias">
        <?php
            $lista = Pratos::listar($cnst, $procurar);
            foreach ($lista as $linha) {
        ?>
        <div>
          <img src="<?php echo $linha['imagem']?>">
            <p class="textoCategoria"><?php echo $linha['nome'];?>&ensp;&ensp;<?php echo $linha['preco'];?>&ensp;&ensp;
            <a href='../cadastro/cadPrato.php?acao=editar&id=<?php echo $linha['id'];?>'>
            <img src='../img/editar.svg' style="width: 1em; display: inline-block;"></a>&ensp;
            <?php echo " <a href=javascript:excluirRegistro('../acao/acaoPrato.php?acao=excluir&id={$linha['id']}')>
            <img src='../img/excluir.svg' style='width: 1em; display: inline-block;'></a>"; ?>
            </p>
          </a>
        </div>
        <?php } ?>
        <div class="add">
          <center>
            <a href="../cadastro/cadPrato.php">
              <img src="../img/plus.svg" class="text-center" style="width: 3em; height: 3em; opacity: 60%;">
            </a>
          </center>
        </div>
      </section>
  </body>
</html>