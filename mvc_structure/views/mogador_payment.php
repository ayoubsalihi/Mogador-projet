<?php
$host = "localhost";
$database = "mogador_payment";
$user = "root";
$password = "";
try {
    $connection = new PDO("mysql:host=$host;dbname=$database",$user,$password);
} catch (PDOException $throw) {
    die ("connection error" . $throw->getMessage());
}
?>