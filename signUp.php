
<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<div class="container-fluid">
    <h1>Création de compte</h1>
    <p>La création de compte est necessaire pour commander. <br>
    Vous pouvez le faire ci-dessous : </p>

    <div class="container">
        <form action="signUpTraitement.php" method="post">
            <div class="form-group">
                <label for="email">Adresse e-mail</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="contact@maboutique.fr">
            </div>
            <div class="form-group">
                <label for="password">Votre mot de passe</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirmez votre mot de passe</label>
                <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" placeholder="Password">
            </div>
            <input class="btn btn-primary" type="submit" value="Créer le compte">
        </form>
    </div>

</div>

<?php include 'partials/footer.php' ?>