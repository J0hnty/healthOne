<?php
include_once('defaults/head.php');
?>
<body>
<div class="container">
    <?php
    include_once('defaults/header.php');
    include_once('defaults/menu.php');
    include_once('defaults/pictures.php');
    global $product,$name;
    if (isset($_POST['verzenden'])) {

    }
    ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/categories">Categories</a></li>
            <li class="breadcrumb-item"><a href="/products">Products</a></li>
            <li class="breadcrumb-item"><a href="/product"><?= $product->name ?></a></li>
            <li class="breadcrumb-item"><a href="/review">Review</a></li>
        </ol>
    </nav>
    <div class="row gy-3 ">
        <div class="col-sm-6">
            <?= "<h2>".$product->name."</h2>"?>
            <?= $product->description?>
        </div>
        <div class="col-sm-6">
            <img class="product-img img-responsive center-block  img-size" src="<?= $product->picture ?>">
        </div>
    </div>
    <!--inputs voor de review.-->
    <form method="post">
        <input type="hidden" id="userName" name="userName" value="<?= $_SESSION['user']->username; ?>"><br>
        <label class="label" for="subject">Onderwerp:</label>
        <input type="text" id="title" name="title"><br>
        <label class="label" for="textarea">Review</label>
        <textarea id="textarea" name="review" rows="4" cols="50"></textarea><br>
        <label class="label"></label>
        <input style="width: 8rem" type="submit" name="verzenden" value="Submit">
    </form>
    <hr>
    <?php
        include_once('defaults/footer.php');
    ?>
</div>
</body>
