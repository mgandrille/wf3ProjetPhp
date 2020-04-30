<?php

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
    'image'         => $_POST['image']
]);

// header('Location: index.php');
?>

<?php include './partials/header.php'; ?>
<?php include './partials/navbar.php'; ?>

<div class="container">
    <h2>Vous venez de créer le produit suivant :</h2>
    <ul>
        <li><strong><?= $_POST['name'] ?></strong></li>
        <li><?= $_POST['category'] ?></li>
        <li><?= $_POST['matiere'] ?></li>
        <li><?= $_POST['price'] ?></li>
        <li><?= $_POST['description'] ?></li>
    </ul>

    <h2>Données de l'image :</h2>
    <?= $_FILES['image'] ?>
</div>

<?php include './partials/footer.php'; ?>
