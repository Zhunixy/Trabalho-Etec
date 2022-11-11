<?php

include 'conexao.php';

$rm = $_POST['rm'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$data = $_POST['data'];

$consulta = "INSERT INTO logar (rm, email, senha, data_nasc) 
VALUES($rm, '$email', $senha, '$data')";

mysqli_query ($conexao, $consulta);

header('location: login.html');