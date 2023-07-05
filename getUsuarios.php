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

function buscarUsuario($id){
    $conn = conectarBanco();
    $sql = "select * from user where id = '$id'";
    $resultado = $conn->query($sql);
    if($resultado-> num_rows >0){
        return $resultado->fetch_assoc();
    }else{
        return null;
    }
}
function atualizarUsuario($id,$usuario,$email){
    $conn=conectarBanco();
    $sql="update user set usuario = ?, email =? where id = ?";
    $smt= $conn->prepare($sql);
    $smt-> bind_param('ssi',$usuario,$email,$id);
    if($smt->execute()){
        echo 'Dados atualizados com Sucesso';
    }else{
        echo "error ao atualizar". mysqli_error($conn);
    }
}
function excluirUsuario($id){
    $conn=conectarBanco();
    $sql = "delete from user where id = ?";
    $smt = $conn->prepare($sql);
    $smt-> bind_param('i',$id);
    if($smt->execute()){
        echo "<script>alert('Usuario excluido'); </script>";
    }else{
        echo "<script>alert('Erro ao excluir'); </script>";
    }
}
?>