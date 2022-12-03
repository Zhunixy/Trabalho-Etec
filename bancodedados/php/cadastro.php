<?php

include_once "conexao.php";

try {
    $nome = filter_var($_POST['nome']);
    $email = filter_var($_POST['email']);
    $assunto = filter_var($_POST['assunto']);
    $mensagem = filter_var($_POST['mensagem']);
    $insert = $conectar -> prepare("INSERT INTO pegarinfo (nome, email, assunto, mensagem) VALUES (:nome, :email, :assunto, :mensagem)");
    $insert -> bindParam (':nome', $nome);
    $insert -> bindParam (':email', $email);
    $insert -> bindParam (':assunto', $assunto);
    $insert -> bindParam (':mensagem', $mensagem);
    $insert -> execute();
    header("location:.../index.html");
} catch (PDOException $e) {
    echo $e -> getMessage();
}

?>