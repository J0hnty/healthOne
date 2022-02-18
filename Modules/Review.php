<?php
function saveReview() {
    global $pdo;

    $productId = $_GET['id'];

    $username = filter_input(INPUT_POST,'userName',FILTER_SANITIZE_STRING);
    $title = filter_input(INPUT_POST,'title',FILTER_SANITIZE_STRING);
    $description = filter_input(INPUT_POST,'review',FILTER_SANITIZE_STRING);
    //$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
    //$rating = filter_input(INPUT_POST,'rating',FILTER_SANITIZE_NUMBER_INT);

    $query = $pdo->prepare('INSERT INTO review (product_id, username,  title, description)
                                        VALUES (:product_id, :username,  :title, :description)');

    $query->bindParam(':product_id',$productId,PDO::PARAM_INT);
    $query->bindParam(':description',$description,PDO::PARAM_STR);
    $query->bindParam(':username',$username,PDO:: PARAM_STR);
    $query->bindParam(':title',$title,PDO:: PARAM_STR);
    //$query->bindParam(':email',$email,PDO::PARAM_STR);
    //$query->bindParam(':rating',$rating,PDO:: PARAM_INT);

    $query->execute();
    //At the end, remove all the POST fields so that the form remains empty… Maybe change the layout of the site?
    $_POST = [];
    return ['result' => true, 'message' => ''];
}

function getReviews() {
    global $pdo;
    $productId = $_GET['id'];

    $query = $pdo->prepare( "SELECT * FROM review WHERE product_id = :id");
    $query->bindParam(':id',$productId,PDO::PARAM_INT);
    $query->execute();

    return $query->fetchAll(PDO::FETCH_CLASS, 'Product');

}