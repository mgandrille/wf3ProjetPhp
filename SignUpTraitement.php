<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<div class="container-fluid">

    <?php if ($_POST['password'] === $_POST['confirmPassword']) : ?>
        <?php 
        include './config/bdd.php';
        $request = "INSERT INTO users (email, password) 
                    VALUES (:email, :password)";
        $response = $bdd->prepare($request);
        $response->execute([
            'email'     => $_POST['email'],
            'password'  => $_POST['password'],
        ]);
        ?>
        <div class="alert alert-success" role="alert">
            Votre compte a bien été créé !
        </div>
        <div>
            <a class="btn btn-success" href="index.php">Retour à l'accueil</a>
        </div>

    <?php else : ?>
        <div class="alert alert-danger" role="alert">
            Erreur d'authentification... <br> Les mots de passe ne correspondent pas !
        </div>
        <div>
            <a class="btn btn-warning" href="signUp.php">Recommencer</a>
        </div>    

    <?php endif ; ?>

    </div>

<?php include 'partials/footer.php' ?>
