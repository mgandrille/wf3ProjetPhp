<?php

include 'config/bdd.php';
$request = "SELECT * FROM produit WHERE id=".$_GET["id"];
$response = $bdd->query($request);
$produit = $response->fetch(PDO::FETCH_ASSOC);

?>

<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<div class="container_fluid">
    <div class="row">
        <div class="container mt-4">
            <div class="media">
                <img src="upload/<?= $produit['image'] ?>" class="align-self-start mr-3" alt="..." width="300">
                <div class="media-body">
                    <h5 class="mt-0"><?= $produit['name'] ?></h5>
                    <p><?= $produit['description'] ?></p>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Catégorie : <?= $produit['category'] ?></li>
                    <li class="list-group-item">Matière : <?= $produit['matiere'] ?></li>
                </ul>
            </div>
        </div>
        <div class="container mt-4">
            <div class="card w-75">
                <h5 class="card-header">Prix</h5>
                <div class="card-body row">
                    <p class="card-text"><?= $produit['price'] ?> € TTC</p>
                    <a href="#" class="btn btn-primary">Acheter</a>
                </div>
            </div>
        </div>    
    </div>
</div>


<?php include 'partials/footer.php' ?>