<?php require_once 'config/config.php'; ?>

<?php

include 'config/bdd.php';

$request = "SELECT 'image' FROM produit WHERE id=".$_GET["id"];
$response = $bdd->query($request);
$image = $response->fetch(PDO::FETCH_ASSOC);
unlink($image);


$request = "DELETE FROM produit 
            WHERE id = :id";
$response = $bdd->prepare($request);

$response->execute([
    'id' => $_GET['id'],
]);

header('Location: index.php');

?>

