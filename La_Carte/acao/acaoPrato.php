<?php 
require_once("../classes/autoload.php"); 
include_once "../conf/default.inc.php";
require_once "../conf/Conexao.php";

$acao = isset($_GET['acao']) ? $_GET['acao'] : "";
    if ($acao == "excluir"){
        $id = isset($_GET['id']) ? $_GET['id'] : 0;
        $prato = new Pratos($id, $_FILES['imagem'], $_POST['nome'], $_POST['ingredientes'], $_POST['descricao'], $_POST['preco'], 
        $_POST['categorias_id'], $_POST['gerente_id']);     
        $prato->excluir();
        header("location:../gerente/editP.php");
    }

$acao = isset($_POST['acao']) ? $_POST['acao'] : "";
    if ($acao == "salvar"){
        $id = isset($_POST['id']) ? $_POST['id'] : "";

        try{
        if ($id == 0){
            $prato = new Pratos("", $_FILES['imagem'], $_POST['nome'], $_POST['ingredientes'], $_POST['descricao'], $_POST['preco'], 
            $_POST['categorias_id'], $_POST['gerente_id']);     
            $prato->inserir();
            header("location:../gerente/editP.php");
        }else {
            $prato = new Pratos($_POST['id'], $_FILES['imagem'], $_POST['nome'], $_POST['ingredientes'], $_POST['descricao'], $_POST['preco'], 
            $_POST['categorias_id'], $_POST['gerente_id']);
            $prato->editar();
        }    
        header("location:../gerente/editP.php");    
    }catch(Exception $e){
        echo "<h1>Erro ao cadastrar o Prato.<h1>
        <br> Erro: <br>".$e->getMessage();
    }     
}
?>