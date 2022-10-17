<!DOCTYPE html>
<?php
    include_once('../classes/autoload.php');
    require_once('../conf/Conexao.php');

    $title = "Gerente";
    $nome = isset($_GET['nome']) ? $_GET['nome'] : "";
    $dataNasc = isset($_GET['dataNasc']) ? $_GET['dataNasc'] : "";
    $cpf = isset($_GET['cpf']) ? $_GET['cpf'] : "";
    $email = isset($_GET['email']) ? $_GET['email'] : "";
    $senha = isset($_GET['senha']) ? $_GET['senha'] : "";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : "";
    if ($acao == 'editar'){
        $id = isset($_GET['id']) ? $_GET['id'] : "";
    if ($id > 0)
        $gerente = new Gerente("", "", "", "", "", "");
        $dados = $gerente->listar(1, $id);
    }
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/cad.css">
    <title><?php echo $title ?></title>
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
            margin-left: 26%;
        }

        .save:hover{
            background-color: #590202;
            transition: all .5s;
        }
    </style>
</head>
<body>
    <section class="content-site" style="margin: 30% 10%;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="text-center">Cadastre-se</h1>
                        <br>
                        <div class="lin"></div> 
                        <br>
                        <div class="form">
                            <form method="POST" action="../acao/acaoGerente.php">
                                <input readonly type="hidden" name="id" id="id" value="<?php if ($acao == "editar") echo $dados[0]['id']; 
                                else echo 0; ?>">
    
                                <label for="nome">Nome:</label><br>
                                    <input require="true" type="text" name="nome" id="nome" placeholder="insira seu nome" 
                                    value="<?php if ($acao == "editar") echo $dados[0]['nome'];?>">
                                    <br><br>

                                <label for="dataNasc">Data de Nascimento:</label><br>
                                    <input required="true" name="dataNasc" id="dataNasc" type="date" required="true"
                                    value="<?php if ($acao == "editar") echo $dados[0]['dataNasc'];?>">
                                    <br><br>   
                                    
                                <label for="cpf">CPF:</label><br>
                                    <input require="true" type="text" name="cpf" id="cpf" placeholder="insira seu cpf" 
                                    value="<?php if ($acao == "editar") echo $dados[0]['cpf'];?>">
                                    <br><br>

                                <label for="email">Email:</label><br>
                                    <input require="true" type="text" name="email" id="email" placeholder="insira seu email" 
                                    value="<?php if ($acao == "editar") echo $dados[0]['email'];?>">
                                    <br><br>
                                    
                                <label for="senha">Senha:</label><br>
                                    <input require="true" type="text" name="senha" id="senha" placeholder="insira sua senha" 
                                    value="<?php if ($acao == "editar") echo $dados[0]['senha'];?>">
                                    <br><br>
                                <br>
                                    <button name="acao" value="salvar" id="acao" type="submit" class="save">Salvar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>