<?php
session_start(); // Démarre la session s'il n'est pas déjà démarré
?>
<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
    <h2>Shopping Cart</h2>
    <ul>
        <?php
        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $cookie) {
                echo '<li>' . $cookie['name'] . '</li>';
            }
        } else {
            echo '<li>No items in the cart</li>';
        }
        ?>
    </ul>
</div>
</section>
<?php require 'inc/foot.php'; ?>
