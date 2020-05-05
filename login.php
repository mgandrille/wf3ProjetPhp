<?php require_once 'config/config.php'; ?>

<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<div class="container d-flex justify-content-center text-center">
    <form action="loginTraitement.php" method="post" class="form-signin">
        <img class="my-4" src="assets/img/logo.jpg" alt="" width="100" height="100">
        <h3 class="mb-3 font-weight-normal">Merci de vous connecter</h3>
        
        <div>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
            
            <div class="mt-3">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
            </div>
        </div>
    
    </form>
</div>

<?php include 'partials/footer.php' ?>
