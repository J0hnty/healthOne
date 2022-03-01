
<?php
    include_once('defaults/head.php');
?>
<body>
<div class="container">
    <?php
        include_once('defaults/header.php');
        include_once('defaults/menu.php');
        include_once('defaults/pictures.php');
    ?>
    <h2>Dit zijn de gegevens die u kunt aanpassen.</h2>
    <form method="post">
<!--        <label class="label">username:</label><br>-->
<!--        <input type="text" name="userName"><br>-->
        <label class="label">old password:</label><br>
        <input type="password" name="old-password1"><br>
        <label class="label">confirm old password:</label><br>
        <input type="password" name="old-password2"><br>
        <label class="label">new password:</label><br>
        <input type="password" name="new-password"><br>
        <input type="submit" name="updateInfo" value="klik mij"><br>
    </form>





    <?php
    include_once 'defaults/footer.php';
    ?>
</div>



</body>