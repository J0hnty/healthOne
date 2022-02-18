<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.
function getCategories()
{
    global $pdo;
    $query=$pdo->prepare("SELECT * FROM categories");
    $query->execute();

    $categories=$query->fetchAll(PDO::FETCH_CLASS,"Category");
    return $categories;

}

function getCategoryId()
{
    global $pdo;
    $query=$pdo->prepare("SELECT id FROM categories");
    $query->execute();

    $categoryId=$query->fetchAll(PDO::FETCH_CLASS,"Category");
    return $categoryId;

}

function getCategoryName(int $id)
{
    global $pdo;
    $query=$pdo->prepare("SELECT name FROM categories WHERE id=$id");
    $query->execute();

    return $query->fetchAll(PDO::FETCH_CLASS,"Category")[0]->name;

}
