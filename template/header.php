<?php 
    include_once("config/url.php");
    include_once("config/process.php");

    //limpa mensagem
    if(isset($_SESSION['msg'])){
        $prinMsg = $_SESSION['msg'];
        $_SESSION['msg'] = '';
    }

?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Agenda de contatos</title>

    <link rel="stylesheet" href="assets/bootstrap-5.3.0-dist/css/bootstrap.min.css">    
    <link rel="stylesheet" href="<?php echo $BASE_URL; ?>css/style.css">

    <!-- Fonte do projeto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="<?php echo $BASE_URL; ?>index.php">
                <img src="<?php echo $BASE_URL; ?>img/agenda.svg" alt="Agenda">
            </a>
            <div>
                <div class="navbar-nav">
                    <a class="nav-link active" id="home-link" href="<?php echo $BASE_URL; ?>index.php">Agenda</a>
                    <a class="nav-link active" href="<?php echo $BASE_URL; ?>create.php">Adicionar contato</a>
                </div>
            </div>
        </nav>
    </header>