<?php
try {
    $conectar = new PDO("mysql:host=localhost;port=3306;dbname=pegaremail;","root","");
} catch (PDOException $e) {
    echo $e -> getMessage();
}
?>