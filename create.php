<?php 
    include_once("template/header.php");
?>

<main class="d-flex justify-content-center">

<div class="w-50 p-3">
    
    <?php include_once("template/buttom_back.html");?>

    <h1 id="main-title"> Criar contato </h1>

    <form id="create-form" action="<?php echo $BASE_URL; ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="create">

        <div class="form-group">
            <label for="name">Nome completo</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome">
        </div>

        <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone">
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Digite o e-mail">
        </div>

        <div class="form-group">
            <label for="observations">Observações</label>
            <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Informe aqui as observações" rows="3"></textarea>
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary col-md-6 text-center">Cadastrar</button>
        </div>
        
    </form>

</div>
</main>
