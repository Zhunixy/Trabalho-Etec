<?php

include_once "conexao.php";

try {
    $email = filter_var($_POST['email']);
    $insert = $conectar -> prepare("INSERT INTO cadastrar (email) VALUES (:email)");
    $insert -> bindParam (':email', $email);
    $insert -> execute();
    header("location: .../index.html");
} catch (PDOException $e) {
    echo $e -> getMessage();
}

?>