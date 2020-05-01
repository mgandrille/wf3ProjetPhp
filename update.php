<?php
$image = $_FILES['image'];
var_dump($image);
var_dump($_POST);

die;

include 'config/bdd.php';
$request = "UPDATE produit 
            SET name = :name, category = :category, matiere = :matiere, price = :price,
                image = :image, description = :description 
            WHERE id = :id";
$response = $bdd->prepare($request);

$response->execute([
    'id'            => $_POST['id'],
    'name'          => $_POST['name'],
    'category'      => $_POST['category'],
    'matiere'       => $_POST['matiere'],
    'price'         => $_POST['price'],
    'image'         => $image['name'],
    'description'   => $_POST['description']
]);

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
            <li>Image : <?= $image['name'] ?></li>
        </ul>
    </div>
    
</div>


<?php include 'partials/footer.php' ?>
