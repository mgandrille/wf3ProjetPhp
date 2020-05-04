<?php require_once 'config/config.php'; ?>

<?php

include 'config/bdd.php';

$request = "DELETE FROM produit 
            WHERE id = :id";
$response = $bdd->prepare($request);

$response->execute([
    'id' => $_GET['id'],
]);

header('Location: index.php');

?>

