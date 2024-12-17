<?php
// Checks form submit form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $voornaam = $_POST["voornaam"];
    $wachtwoord = $_POST["wachtwoord"];
  try {
        require_once "dbh.inc.php";
        $query = "DELETE FROM werknemers WHERE voornaam =:voornaam AND wachtwoord = :wachtwoord;";
        // prepared statement for security against SQL injection
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":voornaam", $voornaam);
        $stmt->bindParam(":wachtwoord", $wachtwoord);
       
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
