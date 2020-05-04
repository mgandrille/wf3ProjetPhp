<?php require_once 'config/config.php'; ?>

<?php include './partials/header.php'; ?>
<?php include './partials/navbar.php'; ?>

<h1>Page d'ajout produit</h1>
<p>Remplissez le formulaire ci-dessous pour créer un produit !</p>

<div class="container-fluid">
    <form action="add.php" method="post" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Nom du produit :</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nom du produit">
            </div>
        </div>
        <div class="form-group row">
            <label for="category" class="col-sm-2 col-form-label">Catégorie :</label>
            <div class="col-sm-10">
                <select name="category" id="category">
                    <option value="eponge">Eponge</option>
                    <option value="bijou">Bijou</option>
                    <option value="divers">Divers</option>
                </select>            
            </div>
        </div>
        <div class="form-group row">
            <label for="matiere" class="col-sm-2 col-form-label">Matière :</label>
            <div class="col-sm-10">
                <input type="text" name="matiere" class="form-control" id="matiere" placeholder="Polyester, Coton, etc.">
            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">Prix (en €) :</label>
            <div class="col-sm-10">
                <input type="number" name="price" class="form-control" id="price" min="0" step="0.01">
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Description :</label>
            <div class="col-sm-10">
                <textarea name="description" class="form-control" id="description" rows="3" placeholder="Description du produit"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="image">Ajouter une image : </label>
            <div class="col-sm-10">
                <input type="file" id="image" name="image">
            </div>
        </div>
        <input class="btn btn-secondary" type="submit" value="Créer le produit">
    </form>
</div>

<?php include './partials/footer.php'; ?>

