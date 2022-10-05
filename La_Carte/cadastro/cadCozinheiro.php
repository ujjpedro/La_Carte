<!DOCTYPE html>
<?php
    include_once('../classes/autoload.php');
    require_once('../conf/Conexao.php');

    $title = "Cozinheiro";
    $nome = isset($_GET['nome']) ? $_GET['nome'] : "";
    $dataNasc = isset($_GET['dataNasc']) ? $_GET['dataNasc'] : "";
    $cpf = isset($_GET['cpf']) ? $_GET['cpf'] : "";
    $email = isset($_GET['email']) ? $_GET['email'] : "";
    $senha = isset($_GET['senha']) ? $_GET['senha'] : "";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : "";
    if ($acao == 'editar'){
        $id = isset($_GET['id']) ? $_GET['id'] : "";
    if ($id > 0)
        $cozinheiro = new Cozinheiro("", "", "", "", "", "");
        $dados = $cozinheiro->listar(1, $id);
    }
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <title><?php echo $title ?></title>
</head>
<body>
    <br>
    <center>
        <h3>Insira seus dados</h3><hr>
            <form method="post" action="../acao/acaoCozinheiro.php">

            <input readonly type="hidden" name="id" id="id" value="<?php if ($acao == "editar") echo $dados[0]['id']; 
            else echo 0; ?>">
                
            <p>Nome:</p>
                <input require="true" type="text" name="nome" id="nome" placeholder="insira seu nome" 
                value="<?php if ($acao == "editar") echo $dados[0]['nome'];?>"><br>

            <p>Data de Nascimento:</p>
                <input required="true" name="dataNasc" id="dataNasc" type="date" required="true"
                value="<?php if ($acao == "editar") echo $dados[0]['dataNasc'];?>"><br>   
                
            <p>CPF:</p>
                <input require="true" type="text" name="cpf" id="cpf" placeholder="insira seu cpf" 
                value="<?php if ($acao == "editar") echo $dados[0]['cpf'];?>"><br>
            
            <p>Email:</p>
                <input require="true" type="text" name="email" id="email" placeholder="insira seu email" 
                value="<?php if ($acao == "editar") echo $dados[0]['email'];?>"><br>
                
            <p>Senha:</p>
                <input require="true" type="text" name="senha" id="senha" placeholder="insira sua senha" 
                value="<?php if ($acao == "editar") echo $dados[0]['senha'];?>"><br>
            <br>
            <hr>
            <br>
                <button name="acao" value="salvar" id="acao" type="submit">Salvar</button>
            </form>
            <br>
    </center>
</body>
</html>