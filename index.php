<!DOCTYPE html>
<!-- index XAMPP server -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Werknemers Dashboard</title>
<!-- Bootstrap 5-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- bs5 ICONS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>
    <div class="container"> 
        <div class="row py-4"> 
        <div class=col-6>
        <h1> Werknemer registratie</h1>
    <form action="includes/formhandler.inc.php" method = "post">
        <input type="text" name= "voornaam" placeholder="Voornaam"> <br/>
        <input type="text" name= "achternaam" placeholder="Achternaam">  <br/>
        <input type="password" name="wachtwoord" placeholder="Wachtwoord">  <br/>
        <input type="text" name="email" placeholder= "zakelijk emailadres"> <br/>
        <button> Scrijf in</button>
        </form>
</div>
        <div class=col-6> 
            <h1> Werknemer overzicht 2024 </h1>
        </div>
    <div class="row">
        <div class = "col-6" > 
        <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. <p>
</div>
        </div>
        
    

    </div>
    
   
</body>
</html>