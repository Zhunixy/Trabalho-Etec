<?php
try {
    $conectar = new PDO("mysql:host=localhost;port=3306;dbname=info;","root","");
} catch (PDOException $e) {
    echo $e -> getMessage();
}
?>