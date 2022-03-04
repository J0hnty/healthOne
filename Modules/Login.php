<?php

function checkLogin($mail, $pass) {
    global $pdo;
    //echo $mail . ' ' . $pass;
    $mail = filter_var($mail,FILTER_VALIDATE_EMAIL);

    if($mail==false){
        return 'EMAIL_WRONG';
    }

    $query = $pdo->prepare('SELECT * FROM user WHERE password=:pass AND email=:mail');

    $query->bindParam(':pass', $pass, PDO::PARAM_STR);
    $query->bindParam(':mail', $mail, PDO::PARAM_STR);

    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_CLASS, 'User');
    if (count($result) == 1){
        $_SESSION['user'] = $result[0];
        return 'GEACHCEPTEERD';
    }else {
        return 'FAILT!';
    }

}

function makeUser($username, $firstname, $lastname, $mail, $pass,) {

    global $pdo;
    $role = 'member';
    //var_dump($_POST);
    $query = $pdo->prepare('INSERT INTO user(username, firstname, lastname, email, password, role)
                                    VALUES ( :username, :firstname, :lastname, :mail, :pass, :role)');
    $query->bindParam(':username', $username, PDO::PARAM_STR);
    $query->bindParam(':firstname', $firstname, PDO::PARAM_STR);
    $query->bindParam(':lastname', $lastname, PDO::PARAM_STR);
    $query->bindParam(':mail', $mail, PDO::PARAM_STR);
    $query->bindParam(':pass', $pass, PDO::PARAM_STR);
    $query->bindParam(':role', $role, PDO::PARAM_STR);


    $query->execute();

    return $message = 'U kunt nu inloggen';

}

function changePass($pass, $id) {
    global $pdo;
    $query = $pdo->prepare('UPDATE user SET password=:pass WHERE id=:id');
    $query->bindParam(':pass', $pass, PDO::PARAM_STR);
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();


}