<?php
function getUser($id) {
    global $pdo;
    //dit moet ik nog binden.
    $query = $pdo->prepare('SELECT * FROM user WHERE id=:id');

}

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

function makeUser() {
    global $pdo;
    var_dump($_POST);
    $query = $pdo->prepare('INSERT INTO user(username, firstname, lastname, birthday, email)
                                    VALUES ( :username, :firstname, :lastname, :brithday, :mail,)');
    $query->bindParam(':username', $username, PDO::PARAM_STR);
    $query->bindParam(':firstname', $firstname, PDO::PARAM_STR);
    $query->bindParam(':lastname', $lastname, PDO::PARAM_STR);
    $query->bindParam(':birthday', $birthday, PDO::PARAM_INT);
    $query->bindParam(':mail', $mail, PDO::PARAM_STR);

    $query->execute();



}