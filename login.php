<?php

include 'cadastro.php';
include 'conexao.php';

$btn = $_POST['btn'];

if (isset($btn)) {

    $verifica = mysql_query("SELECT rm AND senha FROM logar WHERE rm =
    $rm AND senha = $senha") or die("erro ao selecionar");
      if (mysql_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
      }else{
        setcookie("rm",$rm);
        header("Location:home.html");
      }
  }