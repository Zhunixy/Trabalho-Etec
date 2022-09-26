<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

include("login.html");
include("cadastro.html");

if($usuario == $usuario && $senha == $senha){
    header("location: login.html");
}