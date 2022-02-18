<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
var_dump($_SESSION );
$username = $_SESSION['username']
?>
<body>
<div class="container">
    <?php
    include_once ('defaults/header.php');
    include_once ('defaults/menu.php');
    include_once ('defaults/pictures.php');
    ?>
    <h2>Hello <?= $username ?></h2>




    <?php
    include_once ('defaults/footer.php');
    ?>
</div>
</body>
</html>
