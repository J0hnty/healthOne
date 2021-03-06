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
    ?>

    <h4>Sportcenter HealthOne</h4>
    <?php

    if (!empty($_SESSION['user']->role) && $_SESSION['user']->role == 'admin') {
        echo "<h5>Hallo admin: " . $_SESSION['user']->username . "</h5>";
    } else if (!empty($_SESSION['user']->role) && $_SESSION['user']->role == 'member') {
        echo "<h5>Hallo " . $_SESSION['user']->username . "</h5>";
    }

    ?>
    Fit en gezond zijn is geen vanzelfsprekendheid. We moeten er zelf wat voor doen. Goede, gezonde voeding is hiervoor de basis.
    Bewegen hoort hier ook bij. Regelmatig bewegen zorgt voor een goede doorbloeding en draagt bij aan ontspanning van lichaam en geest.
    Sporten is goed voor sterkere spieren en voor de conditie. Sporcenter HealthOne heeft verschillende sportapparaten om mee te kunnen werken aan je conditie.
    <hr>
    <?php
    include_once ('defaults/footer.php');
    ?>
</div>
</body>
</html>
