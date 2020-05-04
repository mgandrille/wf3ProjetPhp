<?php
require_once 'config/uploadFichier.php';

require 'config/bdd.php';
$request = "INSERT INTO produit (name, category, matiere, price, description, image) 
            VALUES (:name, :category, :matiere, :price, :description, :image)";
$response = $bdd->prepare($request);

$response->execute([
    'name'          => $_POST['name'], 
    'category'      => $_POST['category'], 
    'matiere'       => $_POST['matiere'], 
    'price'         => $_POST['price'], 
    'description'   => $_POST['description'],
    'image'         => $newImageName
]);

?>

<?php include './partials/header.php'; ?>
<?php include './partials/navbar.php'; ?>

<div class="container-fluid">
    <h2>Vous venez de créer le produit suivant :</h2>
    <div class="container">
        <ul>
            <li><strong><?= $_POST['name'] ?></strong></li>
            <li><?= $_POST['category'] ?></li>
            <li><?= $_POST['matiere'] ?></li>
            <li><?= $_POST['price'] ?></li>
            <li><?= $_POST['description'] ?></li>
            <li>Image : <?= $newImageName ?></li>
        </ul>
    </div>
</div>
<div class="container">
    <a class="btn btn-success" href="index.php" role="button">Retour à l'accueil</a>
</div>

<?php include './partials/footer.php'; ?>
