<?php 
require_once("../classes/autoload.php"); 
include_once "../conf/default.inc.php";
require_once "../conf/Conexao.php";

$imagem = isset($_FILES['imagem']) ? $_FILES['imagem'] : "";
$acao = isset($_GET['acao']) ? $_GET['acao'] : "";
    if ($acao == "excluir"){
        $id = isset($_GET['id']) ? $_GET['id'] : 0;
        $cat = new Categoria($id, $_FILES['imagem'], $_POST['nome'], $_POST['gerente_id']);     
        $cat->excluir();
        header("location:../gerente/edit.php");
    }

$acao = isset($_POST['acao']) ? $_POST['acao'] : "";
    if ($acao == "salvar"){
        $id = isset($_POST['id']) ? $_POST['id'] : "";

        try{
        if ($id == 0){
            $cat = new Categoria("", $_FILES['imagem'], $_POST['nome'], $_POST['gerente_id']);     
            $cat->inserir();
            header("location:../gerente/edit.php");
        }else {
            $cat = new Categoria($_POST['id'], $_FILES['imagem'], $_POST['nome'], $_POST['gerente_id']);
            $cat->editar();
        }    
        header("location:../gerente/edit.php");    
    }catch(Exception $e){
        echo "<h1>Erro ao cadastrar a Categoria.<h1>
        <br> Erro: <br>".$e->getMessage();
    }     
}
?>