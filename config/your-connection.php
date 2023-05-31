<?php 

    $host = "localhost";
    $dbname = "agenda";
    $$user = "root";
    $pass = ""; //INSIRA A SENHA DO SEU BANCO MYSQL

    try {
        
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

        //MODO DE ERROS
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch (PDOException $e) {
        $error = $e->getMessage();
        echo "Erro: $error";
    }

?>