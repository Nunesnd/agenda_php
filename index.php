<?php 
    include_once("template/header.php");
?>

<div class="container">
    <?php if(isset($prinMsg) && $prinMsg != ''):?>
        <p id="msg"><?= $prinMsg ?></p>
    <?php endif;?>

    <h1 id="main-title">Minha agenda</h1>

    <?php if(count($contacts) > 0): ?>
        
        <table class="table" id="contacts-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contacts as $contact): ?>
                    <tr>
                        <td scope="row"> <?= $contact["id"] ?> </td>
                        <td scope="row"> <?= $contact["name"] ?> </td>
                        <td scope="row"> <?= $contact["email"] ?> </td>
                        <td class="actions">
                            <a href="<?php echo $BASE_URL; ?>mostrar.php?id=<?= $contact["id"] ?>"><i class="fas fa-eye check-icon"></i></a>
                            <a href="<?php echo $BASE_URL; ?>create.php"><i class="far fa-edit edit-icon"></i></a>
                            <button type="submit" class="delete-btn"><i class=" fas fa-times delete-icon"></i></button>
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>

    <?php else: ?>

        <p id="empty-list-text">Ainda não há contatos, <a href="<?php echo $BASE_URL; ?>create.php">Clique aqui para adicionar novo contato</a></p>

    <?php endif; ?>
</div>
