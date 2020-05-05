<?php require_once 'config/config.php' ?>

<section class="jumbotron text-center">
    <div class="container">
        <h1>Ma Boutique</h1>
        <p>
        <?php if(isset($user)) : ?>
            <a href="create.php" class="btn btn-primary my-2">Créer un produit</a>
        <?php else : ?>
            <a href="#" class="btn btn-secondary my-2">Mon panier</a>
            <a href="#" class="btn btn-secondary my-2">Contactez nous !</a>
        <?php endif ; ?>
        </p>
    </div>
</section>