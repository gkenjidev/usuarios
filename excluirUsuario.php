<?php 
include_once "getUsuarios.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    buscarUsuario($id);
    $usuario = buscarUsuario($id);
    if(!$usuario){
        die("Usuário inexistente");
    }else{
        excluirUsuario($id);
        header('Location: todosUsuarios.php');
    }

}
?>