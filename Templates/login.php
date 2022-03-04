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
    if (isset($_POST['verzend'])) {
        $message = 'U kunt nu inloggen';
    }
    global $message;
    ?>
        <div class="row">
            <div class="col-4">
            </div>
            <div class="col-4 text-center">
                <h3><?= $message ?></h3>
                <form method="post">
                    <label>e-mail:</label><br>
                    <input type="email" name="mail" value="" placeholder="jaap@aapmail.cum"><br>
                    <label>passwoord:</label><br>
                    <input type="password" class="" name="pass" value="" placeholder="aap1@7"><br>
                    <button type="submit" name="submit" class="btn btn-warning">Submit</button>
                </form>
                <h3>Nog geen account? maak er hier onder een.</h3>
                <form method="post">
                    <label>username:</label><br>
                    <input type="text" name="username" value="" placeholder="xGAmeR69pr0man"><br>
                    <label>voornaam:</label><br>
                    <input type="text" name="firstname" value="" placeholder="Jaapie"><br>
                    <label>achternaam:</label><br>
                    <input type="text" name="lastname" value="" placeholder="bakkers"><br>
                    <label>e-mail:</label><br>
                    <input type="email" name="mail" value="" placeholder="jaap@aapmail.com"><br>
                    <label>passwoord:</label><br>
                    <input type="password" class="" name="pass" value="" placeholder="aap1@7"><br>
                    <button type="submit" name="verzend" class="btn btn-warning">Submit</button>
                </form>
            </div>
        </div>
        <?php
        include_once('defaults/footer.php');
        ?>
    </div>
</body>
</html>