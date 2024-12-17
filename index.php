<?php 

//session secruirty defend agianst data stealing other users
//session ID secruirity, against Session ID snipping , cross-site scripting and session fixation
require_once 'config.php';

// unset($_SESSION["gebruikersnaam"]);
// session_unset(); 

//purge all session data
// session_destroy();
?>
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
<!-- Creer script user session voor ID mySQL select -->
</head>
<body>
<?php 
echo $_SESSION["gebruikersnaam"];
?>
<nav class="navbar navbar-dark bg-dark">
<div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <div class="container"> 
        <div class="row py-4"> 
        <div class=col-6>
        <h1> Werknemer registratie</h1>
    <form action="includes/formhandler.inc.php" method = "post">
        <input type="text" name= "voornaam" placeholder="Voornaam"> <br/>
        <input type="text" name= "achternaam" placeholder="Achternaam">  <br/>
        <input type="password" name="wachtwoord" placeholder="Wachtwoord">  <br/>
        <input type="text" name="email" placeholder= "zakelijk emailadres"> <br/>
        <br/>
        <button> Schrijf in</button>
    
        </form>
</div>
        <h3 class="display-3"> Pas account aan <h3>
    <form action="includes/userupdate.inc.php" method="post">
    <input type="text" name= "voornaam" placeholder="Voornaam"> <br/>
        <input type="text" name= "achternaam" placeholder="Achternaam">  <br/>
        <input type="password" name="wachtwoord" placeholder="Wachtwoord">  <br/>
        <input type="text" name="email" placeholder= "emailadres"> <br/>
        <br/>
        <button> Update </button>
</form>
    <p>  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem mollitia eveniet dolor.</p>
    <div class="row">
    <div class=col-6> 
           <h1> Verwijder account </h1>
           <form action="includes/userdelete.inc.php" method="post"> 
           <input type="text" name= "voornaam" placeholder="Voornaam"> <br/>
           <input type="password" name="wachtwoord" placeholder="Wachtwoord">  <br/>
           <br/>
           <button> Verwijder </button>
</form>
          
        </div>
        <div class = "col-6" > 
        <h1> Werknemer overzicht 2024 </h1>
        <form class="searchform" action="search.php" method="post">
          <label for="search"> Zoek naar collega opmerkingen: </label>
          <input id="search" type="text" name="voornaamzoek" placeholder="zoek.."> 
          <br/>
          <button> Zoek </button>
        </form> 
        <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. <p>
</div>
        </div>
        
    

    </div>
    
   
</body>
</html>
