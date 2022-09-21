<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$email = $_POST['email'];

include("home.html");  //Vai linkar a pagina html com o PHP

if($usuario == $usuario && $senha == $senha && $email == $email){
    echo "Logado(a) com sucesso! " . $usuario . "<br>" ; 
    header("location: home.html"); //Linkar com a pagina
}

if($usuario =="admin" && $senha =="admin" && $email == "admin@gmail.com"){
    echo "Bem-Vindo ao painel de administrador! " . "<br>";
    header("location: home.html");
}

if($usuario == "kauan" && $senha == "kauan"){
    echo "Bem-Vindo, Administrador: Kauan!! ";
    header("location: home.html");
}

if($usuario == "duarte" && $senha == "duarte"){
    echo "Bem-Vindo, Administrador: Duarte!! "; 
    header("location: home.html");
}

if($usuario == "santana" && $senha == "santana"){
    echo "Bem-Vindo, Administrador: Santana!! "; 
    header("location: home.html");
}

if($usuario == "jose" && $senha == "jose"){
    echo "Bem-Vindo, Administrador: Jose!! "; 
    header("location: home.html");
}






