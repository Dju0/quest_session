<?php
session_start(); // Démarre la session s'il n'est pas déjà démarré

require 'inc/data/products.php'; // Inclut le fichier de données

if (isset($_GET['add_to_cart'])) {
    $cookieId = $_GET['add_to_cart']; // Récupère l'ID du biscuit ajouté

    // Vérifie si le biscuit existe dans le catalogue
    if (isset($catalog[$cookieId])) {
        // Ajoute le biscuit au panier (dans la session)
        $_SESSION['cart'][] = $catalog[$cookieId];
    }
}
?>
<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
