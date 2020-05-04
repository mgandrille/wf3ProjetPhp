<?php require_once 'config/config.php'; ?>

<?php

include 'config/bdd.php';

if(!empty($_FILES['image']['name'])) {
    require_once 'config/uploadFichier.php';
} 

$request = "UPDATE produit 
            SET name = :name, category = :category, matiere = :matiere, price = :price, description = :description" ; 

if(isset($newImageName)) {
    $request .= ", image = :image";
}

$request .= " WHERE id = :id";
$response = $bdd->prepare($request);

$params = [
    'id'            => $_POST['id'],
    'name'          => $_POST['name'],
    'category'      => $_POST['category'],
    'matiere'       => $_POST['matiere'],
    'price'         => $_POST['price'],
    'description'   => $_POST['description']
];

if(isset($newImageName)) {
    $params['image'] = $newImageName;
}

$response->execute($params);


?>

<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<div class="container-fluid">
    <h1>Mise à Jour</h1>

    <div class="alert alert-warning" role="alert">
        Le produit <strong><?= $_POST['name'] ?></strong> a bien été mis à jour !
    </div>

    <div class="container">
        Les nouvelles valeurs sont :
        <ul>
            <li><strong><?= $_POST['name'] ?></strong></li>
            <li><?= $_POST['category'] ?></li>
            <li><?= $_POST['matiere'] ?></li>
            <li><?= $_POST['price'] ?></li>
            <li><?= $_POST['description'] ?></li>
        <?php if(isset($newImageName)) : ?>
            <li>Image : <?= $newImageName ?></li>
        <?php endif ; ?>
        </ul>
    </div>

    <div>
        <a href="index.php" class="btn btn-secondary">Retour à l'accueil</a>
    </div>

</div>


<?php include 'partials/footer.php' ?>
