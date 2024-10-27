<?php
$host="localhost";
$database="mogador_contact";
$user="root";
$password="";
try {
    $connection=new PDO("mysql:host=$host;dbname=$database",$user,$password);
} catch (PDOException $throw) {
    die ("erreur de connexion".$throw->getMessage());
}
?>