<?php 

    session_start();

    include_once("connection.php");
    include_once("url.php");


    $data = $_POST;

    //Inserção no banco
    if(!empty($data)){

        if($data["type"] === "create"){

            $name = $data["name"];
            $phone = $data["phone"];
            $email = $data["email"];
            $observations = $data["observations"];

            $query = "INSERT INTO contacts (name, phone, email, observations) VALUES (:name, :phone, :email, :observations)";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":observations", $observations);

            try {
        
                $stmt->execute();
                $_SESSION["msg"] = "Contato criado com sucesso!";
        
            } catch (PDOException $e) {
                $error = $e->getMessage();
                echo "Erro: $error";
            }
        }

        //redireciona para o index mostrando o novo contato
        header("Location:" . $BASE_URL . "../index.php");

    // seleção de dados
    }else{

        $id;

        if(!empty($_GET)){
            $id = $_GET["id"];
        }
    
        //Se retornar um dado apenas
        if(!empty($id)){
            $query = "SELECT * FROM contacts WHERE id = :id";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            $contact = $stmt->fetch();
    
        //Se não retorna todos
        }else{
            $contacts = [];
            $query = "SELECT * FROM contacts";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $contacts = $stmt->fetchAll();
        }
    }

//Fechar conexão
$conn = null;

?>