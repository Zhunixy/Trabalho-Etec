<?php

include_once "conexao.php";

try {
    $rm = filter_var($_POST['rm']);
    $email = filter_var($_POST['email']);
    $senha = filter_var($_POST['senha']);
    $insert = $conectar -> prepare("INSERT INTO aluno (rm, email, senha) VALUES (:rm, :email, :senha)");
    $insert -> bindParam (':rm', $rm);
    $insert -> bindParam (':email', $email);
    $insert -> bindParam (':senha', $senha);
    $insert -> execute();
    header("location:.../index.html");
} catch (PDOException $e) {
    echo $e -> getMessage();
}

?>