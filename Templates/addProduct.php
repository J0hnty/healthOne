<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>
<body>
<div class="container">
    <?php
    include_once ('defaults/header.php');
    include_once ('defaults/menu.php');
    include_once ('defaults/pictures.php');
    if (isset($_POST['addProduct'])) { 
        var_dump($_POST);
    }
    ?>

    <h2>add</h2>

    <form method="post">
        <label>Product naam</label>
        <input name="name"><br>
        <label>serie nummer</label>
        <input name="serialnumber"><br>
        <label>foto</label>
        <input name="picture"><br>
        <label>kleur</label>
        <input name="color"><br>
        <label>merk</label>
        <input name="brand" ><br>
        <label>beschrijving</label>
        <textarea name="description"></textarea><br>
        <button name="addProduct">add</button>
    </form>

    <?php
    include_once ('defaults/footer.php');
    ?>
</div>
</body>
</html>
