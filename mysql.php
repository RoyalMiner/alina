<?php
$host = "localhost";
$name = "s3425_wiedelustigleckerbist";
$user = "s3425_wiedelustigbist";
$passwort = "Ya6s60?b";
try{
    $mysql = new PDO("mysql:host=$host;dbname=$name", $user, $passwort);
} catch (PDOException $e){
    echo "SQL Error: ".$e->getMessage();
}
 ?>


