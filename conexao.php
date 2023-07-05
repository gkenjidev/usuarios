<?php
conectarBanco();
function conectarBanco(){
    $servername ="localhost";
    $username = "root";
    $password ="";
    $dbname ="login";
    $port = 3307;
    $conn = new mysqli($servername, $username, $password, $dbname, 3307 );

    if($conn->connect_error){
        die("Conexão falhou: ". $conn->connect_error);
    }   
        $conn->set_charset("utf8"); 
        return $conn;
}
?>