<?php
require_once "conexao.php";
//getUsuarios();
function getUsuarios(){
$conn = conectarBanco();
$sql="select * from user";
$usuarios = $conn->query($sql);

$conn->close();
return $usuarios;
}
?>