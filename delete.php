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

    <div class="media">
  <img src="..." class="mr-3" alt="...">
  <div class="media-body">
    <h5 class="mt-0">Media heading</h5>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
  </div>
</div>

<a href="index.php" class="btn btn-primary">Go somewhere</a>

    <?php include 'partials/footer.php' ?>