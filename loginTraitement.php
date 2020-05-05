<?php require_once 'config/config.php'; ?>

<?php

include './config/bdd.php';
$request = "SELECT * FROM users 
            WHERE email = :email && password = :password";
$response = $bdd->prepare($request);
$response->execute([
    'email'    => $_POST['email'],
    'password' => $_POST['password']
]);
$user = $response->fetch(PDO::FETCH_ASSOC);

$_SESSION['user'] = $user;
?>

<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<div class="container-fluid">

    <?php if (isset($user)) : ?>
        <!-- <div class="alert alert-success" role="alert">
            <p>Bienvenue <? //$user['email'] ?> </p>
            <p>Vous êtes bien connecté ! </p>
        </div>
        <div>
            <a class="btn btn-success" href="index.php">Retour à l'accueil</a>
        </div> -->
        <?php header('Location: index.php'); ?>

    <?php else : ?>
        <div class="alert alert-danger" role="alert">
            Erreur d'authentification...
        </div>
        <div>
            <a class="btn btn-warning" href="login.php">Recommencer</a>
        </div>    

    <?php endif ; ?>

</div>

<?php include 'partials/footer.php' ?>

