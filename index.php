<?php

include 'config/bdd.php';

$request = "SELECT * FROM produit";
$response = $bdd->query($request);
$produits = $response->fetchAll(PDO::FETCH_ASSOC);

// var_dump($animals);

?>

<?php include './partials/header.php'; ?>
<?php include './partials/navbar.php'; ?>
<?php include './partials/jumbotron.php'; ?>

<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <?php foreach($produits as $produit) : ?>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                        xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                        role="img" aria-label="Placeholder: Thumbnail">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                            dy=".3em">Image</text>
                    </svg>
                    <div class="card-body">
                        <h5><?= $produit['category'] ?></h5>
                        <p class="card-text"><?= $produit['type'] ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include './partials/footer.php'; ?>
