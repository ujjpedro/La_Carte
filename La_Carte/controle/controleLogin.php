<?php
        include_once "../conf/Conexao.php";
        include_once "../classes/autoload.php";
        //Login do usuário com sucesso, Login do usuário sem sucesso, Logout do usuário
        if(Cliente::efetuarLogin($_POST['email'], $_POST['senha'])) {
            header("Location:../home/index.php");
        } else if(isset($_POST['email']) && isset($_POST['senha'])) {
            echo "<center>Email ou senha incorretos!</center>";
            // header("Location:../../show/usuario/login.php");
        } else {
            header("Location:../login.php");
        }
?>