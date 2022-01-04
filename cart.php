<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php';

session_start();

if(empty($_SESSION['loginname']))
{
    header('Location: login.php');
    exit();
}
?>

<section class="cookies container-fluid">
    <div class="row">
        <h1>Your cart</h1>
        <ul>
            <?php
            foreach ($_SESSION['cart'] as $idProduct){
            ?>
                <li><?= $catalog[$idProduct]['name'] ?></li>
            <?php
                 }
            ?>
        </ul>

    </div>
</section>
<?php require 'inc/foot.php'; ?>
