<?php require_once 'config/config.php' ?>

<section class="jumbotron text-center">
    <div class="container">
        <h1>Ma Boutique</h1>
        <p>
        <?php if($user) : ?>
            <a href="create.php" class="btn btn-primary my-2">Créer un produit</a>
        <?php endif ; ?>
            <a href="#" class="btn btn-secondary my-2">Contactez nous !</a>
        </p>
    </div>
</section>