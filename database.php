<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "aluguelveiculos";

    //Criando a conexão:
    $conn = new mysqli($servername, $username, $password, $dbname);

    //Verificando a conexão:
    if($conn->connect_error){
        die("Erro de conexão:" . $conn->connect_error);
    }
?>