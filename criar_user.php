<?php
include_once "conexao.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $newUsername = $_POST [ "newUsername" ];
    $newPassword = $_POST [ "newPassword" ];
    $email = $_POST["email"];
    criarUsuario($newUsername,$newPassword,$email);
}
conectarBanco();
function criarUsuario($newUsername, $newPassword,$email){
    $conn= conectarBanco();
    
    $sql = "select * from user where usuario = '$newUsername'";
    $resultado = $conn->query($sql);
    if($resultado->num_rows>0){
        echo "Usuário já cadastrado";
    }else{
        $sql = "insert into user (usuario,senha,email) values ('$newUsername', '$newPassword','$email' )";
        if($conn->query($sql)){
            echo "<script>alert('Usuário criado com sucesso!');</script>";
            header('Location: index.php');
        }else{
            die("Erro: ".mysqli_connect_error());
        }
        
    }
}
?>