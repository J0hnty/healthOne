<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
if (!empty($_SESSION)) {
    var_dump($_SESSION);
//    $userName = $_SESSION['username'];
//    echo "doei doei $userName";
//
}
if (!empty(isset($_POST['logout']))) {
    echo 'je bent uitgelogt';
    session_destroy();
    header('Location: /home');
}else if (!empty(isset($_POST['stay']))){
    header('Location: /home');
}
?>
<body>
<div class="container">
    <?php
    include_once ('defaults/header.php');
    include_once ('defaults/menu.php');
    include_once ('defaults/pictures.php');
    ?>
    <h2>Weet je zeker dat je wilt uitloggen?</h2>
    <form method="post">
        <input type="submit" name="logout" value="Ja ik wil uitloggen">
        <input type="submit" name="stay" value="Nee ik wil niet uitloggen">
    </form>




    <?php
    include_once ('defaults/footer.php');
    ?>
</div>
</body>
</html>
