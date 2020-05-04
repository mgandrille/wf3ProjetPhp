<?php require_once 'config/config.php'; ?>

<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="container text-center w-50">
            <form action="loginTraitement.php" method="post" class="form-signin">
                <img class="mb-4" src="assets/img/logo.jpg" alt="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">Merci de vous connecter</h1>
                
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                
                <div class="checkbox mb-3"> 
                    <!-- <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label> -->
                </div>
                    <input class="btn btn-lg btn-primary" type="submit" value="Se connecter">
            </form>
        </div>
    </div>
</div>

<?php include 'partials/footer.php' ?>