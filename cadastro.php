<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$email = $_POST['email'];

include("login.html");
include("cadastro.html");

if($usuario == null || $senha == null){ 
    header(location: "cadastro.html");
}

if($usuario == "adm" && $senha == "adm"){
    header(location: "login.html");
}

