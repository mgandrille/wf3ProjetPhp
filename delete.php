<?php require_once 'config/config.php'; ?>

<?php

include 'config/bdd.php';
$request = "SELECT * FROM produit WHERE id=".$_GET["id"];
$response = $bdd->query($request);
$produit = $response->fetch(PDO::FETCH_ASSOC);

?>

<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<div class="container-fluid">
    <h1>Suppression de l'article</h1>
    <p>Vous souhaitez supprimer l'article suivant :</p>

    <div class="media mb-3">
        <img src="upload/<?= $produit['image'] ?>" class="mr-3" width="150" alt="...">
        <div class="media-body">
            <h5 class="mt-0"><?= $produit['name'] ?></h5>
            <p>
                Catégorie : <?= $produit['category'] ?> <br>
                Description : <?= $produit['description'] ?>
            </p>
        </div>
    </div>

    <div class="container">
        <div>
            <h5>Etes vous sûr de vouloir supprimer ce produit ?</h5>
        </div>
        <div>
            <a href="index.php" class="btn btn-secondary"> Non </a>
            <a href="deleteConfirm.php?id=<?= $produit['id'] ?>" class="btn btn-danger"> Oui </a>
        </div>
    </div>

    <?php include 'partials/footer.php' ?>