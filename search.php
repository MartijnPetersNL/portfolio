<?php
// Checks form submit form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $voornaamZoek= $_POST["voornaamzoek"];
 

    try {
        require_once "includes/dbh.inc.php";
        $query = "SELECT * FROM commentaar WHERE voornaam = :voornaamzoek;";
        // prepared statement for security against SQL injection
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":voornaamzoek", $voornaamZoek);
      
        $stmt->execute();

        $resultaten = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // Manual close statement en Connectie 
        $stmt = null;
        $pdo = null;

    } catch (PDOException $e) {
        die("Query gefaald:" . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultaat</title>
    <!-- Bootstrap 5-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- bs5 ICONS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<!-- Creer script user session voor ID mySQL select -->
</head>
<body>
<div class="container bg-light">
<h3> Zoekresultaten: </h3>

<?php 
if (empty($resultaten)) {
    echo "<div>";
    echo "<p> Geen opmermerkingen gevonden.</p>";
    echo "</div>";
} else {
    // var_dump ($resultaten);
    foreach ($resultaten as $row) {
        echo "<div class='col-6 text-center py-3'>";
        echo "<h4 class='fw-bold'>". htmlspecialchars($row["voornaam"]) . "</h4>";
        echo "<p>". htmlspecialchars($row["commentaar_bericht"]) ."</p>";
        echo "<p>". htmlspecialchars ($row["gemaakt_op"]) ."</p>"; 
        echo "</div>";
    }
    
}
?>
</div>
  
</body>
</html>