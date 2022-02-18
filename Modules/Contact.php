<?php

function getOpeningsTijden()
{
    global $pdo;
    $query=$pdo->prepare("SELECT * FROM openingstijden");
    $query->execute();

    $contacts=$query->fetchAll(PDO::FETCH_ASSOC);
    return $contacts;

}