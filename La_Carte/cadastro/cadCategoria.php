<!DOCTYPE html>
<?php
    include_once('../classes/autoload.php');
    require_once('../conf/Conexao.php');

    $title = "Categorias";
    $imagem = isset($_FILES['imagem']) ? $_FILES['imagem'] : "";
    $nome = isset($_GET['nome']) ? $_GET['nome'] : "";
    $gerente_id = isset($_GET['gerente_id']) ? $_GET['gerente_id'] : "";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : "";
    if ($acao == 'editar'){
        $id = isset($_GET['id']) ? $_GET['id'] : "";
    if ($id > 0)
        $cat = new Categoria("", "", "", "");
        $dados = $cat->listar(1, $id);
    }
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/cad.css">
    <title>Login</title>
    <style>
        input{
            border-radius: 4px;
            border: none;
            background-color: #FFFAFA;
            color: #D97904;
            padding-left: 5px;
            width: 15em;
            align-content: center;
        }

        .save{
            background-color: #D97904;
            border: 1px dotted #D97904;
            padding: 6px;
            color: white;
            border-radius: 6px;
            width: 100px;
            font-weight: bold;
        }

        .save:hover{
            background-color: #590202;
            transition: all .5s;
        }
    </style>
</head>
<body>
    <section class="content-site">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center">Cadastrar Categoria</h1>
                    <br>
                    <div class="lin"></div> 
                    <br>
                    <form method="POST" action="../acao/acaoCategoria.php" enctype="multipart/form-data">
                    <div class="form">
                        <input readonly type="hidden" name="id" id="id" value="<?php if ($acao == "editar") echo $dados[0]['id']; 
                        else echo 0; ?>">

                        <label for="imagem">Imagem:</label><br>
                            <input type="file" name="imagem" id="imagem" required 
                            value="<?php if (isset($id)) echo $dados[0]['imagem'];?>">
                        <br><br>

                        <label for="nome">Nome:</label><br>
                            <input type="text" placeholder="Insira seu nome" name="nome" id="nome" required value="<?php if (isset($id)) echo $dados[0]['nome'];?>">
                        <br><br>

                        <label for="gerente_id">Gerente:</label><br>
                        <select name="gerente_id" id="gerente_id">
                            <?php
                                $pdo = Conexao::getInstance();
                                $consulta = $pdo->query("SELECT id, nome FROM gerente");
                                while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
                                <option value="<?php echo $linha['id']?>">
                                    <?php echo $linha['nome'];?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                        <br><br>
                        <center>
                        <button name="acao" id="acao" type="submit" value="salvar" class="save">Salvar</button>
                        </center>
                    </form>
                </div>
            </div>
    </section>
</body>
</html>


<!-- <!DOCTYPE html>
<?php
    include_once('../classes/autoload.php');
    require_once('../conf/Conexao.php');

    $title = "Categorias";
    $imagem = isset($_FILES['imagem']) ? $_FILES['imagem'] : "";
    $nome = isset($_GET['nome']) ? $_GET['nome'] : "";
    $gerente_id = isset($_GET['gerente_id']) ? $_GET['gerente_id'] : "";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : "";
    if ($acao == 'editar'){
        $id = isset($_GET['id']) ? $_GET['id'] : "";
    if ($id > 0)
        $cat = new Categoria("", "", "", "");
        $dados = $cat->listar(1, $id);
    }
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../img/icone.png">
    <link rel="stylesheet" href="../css/cad.css">
    <title><?php echo $title ?></title>
</head>
<body>
    <br>
    <center>
        <h3>Insira os dados</h3><hr>
            <form method="post" action="../acao/acaoCategoria.php" enctype="multipart/form-data">

            <input readonly type="hidden" name="id" id="id" value="<?php if ($acao == "editar") echo $dados[0]['id']; 
            else echo 0; ?>">
                
            <p>Nome:</p>
                <input require="true" type="text" name="nome" id="nome" placeholder="insira seu nome" 
                value="<?php if ($acao == "editar") echo $dados[0]['nome'];?>"><br>
            
            <p>Gerente</p>
            <select name="gerente_id" id="gerente_id">
                <?php
                $pdo = Conexao::getInstance();
                $consulta = $pdo->query("SELECT id, nome FROM gerente");
                while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
                <option value="<?php echo $linha['id']?>">
                    <?php echo $linha['nome'];?>
                </option>
                <?php } ?>
            </select>

            <br>
            <hr>
            <br>
                <button name="acao" value="salvar" id="acao" type="submit">Salvar</button>
            </form>
            <br>
    </center>
</body>
</html> -->