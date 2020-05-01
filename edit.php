<?php
require 'config/bdd.php';
$request = "SELECT * FROM produit WHERE id=".$_GET["id"];
$response = $bdd->query($request);
$produit = $response->fetch(PDO::FETCH_ASSOC);

?>

<?php include 'partials/header.php'; ?>
<?php include 'partials/navbar.php'; ?>

<div class="container-fluid">
    <h1>Modifier l'article</h1>
    <p>Vous pouvez faire vos modifications ici...</p>

    <div class="container-fluid">
        <form action="update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" class="form-control" id="id" value="<?= $produit['id'] ?>">
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Nom du produit :</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nom du produit" value="<?= $produit['name'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="category" class="col-sm-2 col-form-label">Catégorie :</label>
                <div class="col-sm-10">
                    <select name="category" id="category">
                        <option value="eponge" <?= ($produit['category'] === "eponge" ? 'selected' : ''); ?>>Eponge</option>
                        <option value="bijou" <?= ($produit['category'] === "bijou" ? 'selected' : ''); ?>>Bijou</option>
                        <option value="divers" <?= ($produit['category'] === "divers" ? 'selected' : ''); ?>>Divers</option>
                    </select>            
                </div>
            </div>
            <div class="form-group row">
                <label for="matiere" class="col-sm-2 col-form-label">Matière :</label>
                <div class="col-sm-10">
                    <input type="text" name="matiere" class="form-control" id="matiere" placeholder="Polyester, Coton, etc." value="<?= $produit['matiere'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="price" class="col-sm-2 col-form-label">Prix (en €) :</label>
                <div class="col-sm-10">
                    <input type="number" name="price" class="form-control" id="price" min="0" step="0.01" value="<?= $produit['price'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="description" class="col-sm-2 col-form-label">Description :</label>
                <div class="col-sm-10">
                    <textarea name="description" class="form-control" id="description" rows="3" placeholder="Description du produit"><?= $produit['description'] ?></textarea>
                </div>
            </div>
            <div class="form-group row"> <!-- il faut récupérer le nom du fichier déjà enregistré pour l'utiliser -->
                <label for="image">Modifier l'image : </label>
                <div class="col-sm-10">
                    <input type="file" id="image" name="image" value="<?= $produit['image'] ?>">
                </div>
            </div>
            <input class="btn btn-secondary" type="submit" value="Modifier le produit">
        </form>

    </div>
</div>


<?php include 'partials/footer.php' ?>