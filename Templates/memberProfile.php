<!DOCTYPE html>
<html>
<?php
    include_once('defaults/head.php');
    //var_dump($_SESSION );
    $username = $_SESSION['user']->username;
?>
<body>
<div class="container">
    <?php
        include_once ('defaults/header.php');
        include_once ('defaults/menu.php');
        include_once ('defaults/pictures.php');
    ?>
    <h2>Hallo <?= $username ?></h2>
    <table>
        <tr>
            <th>username</th>
            <td><?= $_SESSION['user']->username ?></td>
        </tr>
        <tr>
            <th>voornaam</th>
            <td><?= $_SESSION['user']->firstname ?></td>
        </tr>
        <tr>
            <th>achternaam</th>
            <td><?= $_SESSION['user']->lastname ?></td>
        </tr>
<!--        <tr>-->
<!--            <th>geboorte dag</th>-->
<!--            <td>--><?php //echo $_SESSION['user']->birthday ?><!--</td>-->
<!--        </tr>-->
        <tr>
            <th>e-mail</th>
            <td><?= $_SESSION['user']->email ?></td>
        </tr>
    </table>
    <br>
    <h4>
        Wilt u uw wachtwoord aanpassen? Klik hieronder om te veranderen.
    </h4>
    <?php
    global $message;
    echo $message;
    if (!empty($message)) {
        echo $message;
    }
    ?>
    <form method="post">
        <input type="submit" name="editInfo" value="Verander je wachtwoord hier!">
    </form>

    <?php
        include_once ('defaults/footer.php');
    ?>
</div>
</body>
</html>
