<?php

$host;
$db_name;
$username;
$password;

try {
    $database = new PDO("mysql:dbname=$db_name;host=$host", $username, $password);
} catch(PDOException $e) {
    echo "Remote database connection failed.<br>";
    echo($e->getMessage());
    exit;
}


?>