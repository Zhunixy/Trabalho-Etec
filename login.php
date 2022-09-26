<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$email = $_POST['email'];

include("home.html");  //Vai linkar a pagina html com o PHP
include("cadastro.html");

if($usuario == null && $senha == null){
    header("location: cadastro.html");
}

if($usuario == $usuario && $senha == $senha){
    header("location: home.html");
}






