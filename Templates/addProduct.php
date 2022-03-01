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
        //var_dump($_POST);
    }
    ?>

    <h2>add</h2>

    <form method="post" enctype="multipart/form-data">
        <label class="label">Product naam</label>
        <input name="name"><br>
        <label class="label">serie nummer</label>
        <input name="serialnumber"><br>
        <label class="label" >foto</label>
        <input type="file" name="picture"><br>
        <label class="label">kleur</label>
        <input name="color"><br>
        <label class="label">merk</label>
        <input name="brand" ><br>
        <label class="label">beschrijving</label>
        <textarea name="description"></textarea><br>
        <select name="category">
            <option value=""></option>
            <option value="2">roeitrainer</option>
            <option value="3">crosstrainer</option>
            <option value="4">hometrainer</option>
            <option value="5">loopband</option>
        </select>
        <button name="addProduct">add</button>
    </form>

    <?php
    include_once ('defaults/footer.php');
    ?>
</div>
</body>
</html>
