<?php require_once 'config/config.php'; ?>

<?php

include 'config/bdd.php';
$request = "SELECT * FROM produit";
$response = $bdd->query($request);
$produits = $response->fetchAll(PDO::FETCH_ASSOC);

?>

<?php include './partials/header.php'; ?>
<?php include './partials/navbar.php'; ?>
<?php include './partials/jumbotron.php'; ?>

<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <?php foreach($produits as $produit) : ?>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="upload/<?= $produit['image'] ?>" class="card-img-top" height="225" alt="...">
                    <div class="card-body">
                        <h5><?= $produit['name'] ?></h5>
                        <p class="card-text"><?= $produit['category'] ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a type="button" href="view.php?id=<?= $produit['id']?>" class="btn btn-sm btn-outline-secondary">View</a>
                                <a type="button" href="#" class="btn btn-sm btn-outline-secondary">Panier</a>
                                <?php if(isset($user)) : ?>                                
                                    <a type="button" href="edit.php?id=<?= $produit['id']?>" class="btn btn-sm btn-outline-secondary">Edit</a>
                                    <a type="button" href="delete.php?id=<?= $produit['id']?>" class="btn btn-sm btn-outline-secondary">Delete</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include './partials/footer.php'; ?>
