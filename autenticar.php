<?php
require_once "conexao.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    autenticarUsuario($username,$password);
}
function autenticarUsuario($username, $password){
    $conn=conectarBanco();
    $sql = "select * from user where usuario = '$username' and senha = '$password'";
    $resultado = $conn->query($sql);
    if($resultado->num_rows > 0){
        header('Location: todosUsuarios.php');
    }else{
        echo "Recusado";
    }
}
?>