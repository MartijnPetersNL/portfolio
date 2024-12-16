<?php
// Checks form submit form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $voornaam = $_POST["voornaam"];
    $achternaam = $_POST["achternaam"];
    $wachtwoord = $_POST["wachtwoord"];
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php";
        $query = "INSERT INTO werknemers(voornaam,achternaam,wachtwoord,email) VALUES (?,?,?,?);";
        // prepared statement for security against SQL injection
        $stmt = $pdo->prepare($query);

        $stmt->execute([$voornaam, $achternaam, $wachtwoord, $email]);

        // Manual close statement en Connectie 
        $stmt = null;
        $pdo = null;

        header("Location: ../index.php"); // redirect 
        die();
    } catch (PDOException $e) {
        die("Query gefaald:" . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}
