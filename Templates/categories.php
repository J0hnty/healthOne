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
                <li class="breadcrumb-item"><a href="/categories">Categories</a></li>
            </ol>
        </nav>
        <div class="row gy-3 ">
            <?php global $categories ?>
            <?php foreach ($categories as $category): ?>
                <div class="col-sm-4 col-md-3">
                    <a href="/category/<?= $category->id ?>">
                        <div class="card">
                            <div class="card-body text-center">
                                <img class="product-img img-responsive center-block" alt="Product image" src="<?= $category->picture ?>">
                                <div class="card-title mb-3"><?= $category->name ?></div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <hr>
        <?php
           include_once('defaults/footer.php');
        ?>
    </div>
</body>
</html>
