<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

include("home.html");  //Vai linkar a pagina html com o PHP
include("cadastro.html");

if($usuario === null && $senha === null){?>
    <a href="cadastro.html"></a>
    <?php

}else{ ?>
    <a href="home.html"></a>
    
    <?php
}








