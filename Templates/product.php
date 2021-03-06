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
        global $product;
        global $reviews;
    ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/categories">Categories</a></li>
            <li class="breadcrumb-item"><a href="/category">Products</a></li>
            <li class="breadcrumb-item"><a href="/product"><?= $product->name ?></a></li>
        </ol>
    </nav>
    <div class="row gy-3 ">
        <div class="col-sm-6">
            <?= "<h2>".$product->name."</h2>"?>
            <?= $product->description?>
        </div>
        <div class="col-sm-6">
            <img class="product-img img-responsive center-block" src="<?= $product->picture ?>">
        </div>
    </div>
    <?php if (!empty($_SESSION) ): ?>
        <a class="btn btn-secondary" href="/review/<?php echo $product->id?>">review</a>
    <?php endif; ?>
    <section class="review display">
        <?php global $reviews;?>
        <?php foreach ($reviews as $review):?>
            <div class="card">
                <div class="card-body text-center">
                    <div class="card-body mb-3"><?= $review->userName ?></div>
                    <div class="card-title mb-3"><?= $review->title ?></div>
                    <div class="card-body mb-3"><?= $review->description ?></div>
                    <div class="card-body mb-3"><?= $review->date ?></div>
                    <?php if (!empty($_SESSION) && $_SESSION['user']->role == 'admin'): ?>
<!--                        <button class="btn-danger">delete</button>-->
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </section>




    <hr>
    <?php
    include_once('defaults/footer.php');

    ?>
</div>
</body>
</html>
