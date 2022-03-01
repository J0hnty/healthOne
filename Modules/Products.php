<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.
function getProducts(int $categoryId) {
    global $pdo;
    $query = $pdo->prepare("SELECT products.id as id, products.picture as picture, products.description as description, products.name as name, products.category_id as category_id, categories.name as category_name
    FROM products join categories ON products.category_id = categories.id WHERE category_id = :id");
    $query->bindParam("id",$categoryId);
    $query->execute();

    return $query->fetchAll(PDO::FETCH_CLASS,"Product" );
}

function getAllProducts() {
    global $pdo;

    $query = $pdo->prepare("SELECT products.id as id, products.picture as picture, products.description as description, 
        products.name as name, products.category_id as category_id, categories.name as category_name
        FROM products join categories ON products.category_id = categories.id");
    $query->execute();

    return $query->fetchAll(PDO::FETCH_CLASS,"Product");

}

function getProduct(int $productId) {
    global $pdo;
    try {
        $query=$pdo->prepare("SELECT products.*, categories.name as category_name FROM products 
        join categories ON products.category_id = categories.id WHERE products.id = :id");
        $query->bindParam("id", $productId);
        $query->setFetchMode(PDO::FETCH_CLASS,'Product');
        $query->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    return $query->fetch();
}

function deleteProduct(int $productId) {
    global $pdo;

    $query=$pdo->prepare("DELETE FROM products WHERE id = :id");
    $query->bindParam("id", $productId);
    $query->execute();


}

function createProduct($name, $serialNumber, $description, $color, $pictureName, $pictureTempName, $brand, $categoryNumber) {
    global $pdo;
    $pictureName = '/img/'.$pictureName;
    $query=$pdo->prepare("INSERT INTO products (name, serialnumber, description, picture, color, brand, category_id) 
                                VALUES (:name, :serialnumber, :description, :picture, :color, :brand, :category_id)");
    $query->bindParam("name", $name);
    $query->bindParam("serialnumber", $serialNumber);
    $query->bindParam("description", $description);
    $query->bindParam("picture", $pictureName);
    $query->bindParam("color", $color);
    $query->bindParam("brand", $brand);
    $query->bindParam("category_id", $categoryNumber);
    move_uploaded_file($pictureTempName, '../public'.$pictureName);
    $query->execute();
}
