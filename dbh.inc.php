<?php
$dsn = "mysql:host=localhost;dbname=myfirstdatabase";
$dbusername = "root";
$dbpassword = "";

try {
    //PHP data objects
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    ech "Connectie gefaald: " . $e->getMessage();
}
