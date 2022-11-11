<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "login";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$conexao){
    die("Falha na conexao: " . mysqli_connect_error());

}else{
    echo "Conexao realizada com sucesso";
}      