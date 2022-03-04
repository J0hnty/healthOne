<!DOCTYPE html>
<html>
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
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/contact">Contact</a></li>
        </ol>
    </nav>
    <div class="row gy-3 ">
        <div class="col-sm-8">
            <table>
                <tr>
                    <th>Dag</th>
                    <th>openingstijd</th>
                    <th>sluitingstijd</th>
                </tr>
                <?php global $contacts ?>
                <?php foreach ($contacts as $contact): ?>
                    <tr>
                        <td><?php echo $contact['dag']; ?></td>
                        <td><?php echo $contact['openingsTijd']?></td>
                        <td><?php echo $contact['sluitingsTijd']?></td>
                    </tr>
                    <?php endforeach;?>
            </table>
            <?php ?>
        </div>
    </div>

    <div style="text-align: center" class ="circle foreign-embed">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2456.639189021884!2d4.33007681606151!3d51.99522967971829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5b44d61a108cf%3A0x9da6361d0a36ebd1!2sZuidhoornseweg%206A%2C%202625%20DV%20Den%20Hoorn!5e0!3m2!1snl!2snl!4v1633693263063!5m2!1snl!2snl" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <p>U kunt ons ook altijd berijken via: <b>info@healthone.com</b></p>
    <hr>
    <?php
    include_once('defaults/footer.php');
    ?>
</div>

</body>
</html>
