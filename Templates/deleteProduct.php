<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>
<body>
<div class="container">
    <?php
    include_once ('adminDefaults/header.php');
    include_once ('adminDefaults/menu.php');
    include_once ('adminDefaults/pictures.php');
    ?>
    <?php
    $delete = deleteProduct($_POST['submit']);
    // if (!empty($_POST['delete'])) {
    //     $delete = deleteProduct($_POST['submit']);
    // }
    ?>
    <h2>delete</h2>
    <p>wil je echt dit product deleten...</p>
    <form method="post">
        <button name="delete" value="delete">delete</button>
    </form>

    <?php
    include_once ('defaults/footer.php');
    ?>
</div>
</body>
</html>

