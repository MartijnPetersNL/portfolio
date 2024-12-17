<?php
// Checks form submit form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $voornaam = $_POST["voornaam"];
    $achternaam = $_POST["achternaam"];
    $wachtwoord = $_POST["wachtwoord"];
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php";
        $query = "UPDATE werknemers SET voornaam = :voornaam, achternaam = :achternaam,
        wachtwoord = :wachtwoord, email = :email WHERE id = 2;";
        // prepared statement for security against SQL injection
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":voornaam", $voornaam);
        $stmt->bindParam(":achternaam", $achternaam);
        $stmt->bindParam(":wachtwoord", $wachtwoord);
        $stmt->bindParam(":email", $email);
        $stmt->execute();

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
