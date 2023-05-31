<?php 
    include_once("template/header.php");
?>

<main class="d-flex justify-content-center">

    <div class="w-50 p-3">
        
        <a class="btn btn-outline-primary" href="<?php echo $BASE_URL; ?>index.php">Voltar</a>

        <h1 id="main-title"> <?= $contact["name"] ?> </h1>
        <p><b>Telefone:</b></p>
        <p> <?= $contact["phone"] ?> </p=>
        <p><b>E-mail:</b></p>
        <p> <?= $contact["email"] ?> </p>
        <p><b>Observações:</b></p>
        <p> <?= $contact["observations"] ?> </p>
    </div>
</main>

