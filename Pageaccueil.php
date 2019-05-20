<!DOCTYPE html>
<html>
<title>SolidBIO</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#Accueil" class="w3-bar-item w3-button">SolidBIO</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="/Monsite/Recette.php" class="w3-bar-item w3-button">Incription</a>

      <a href="#Recette" class="w3-bar-item w3-button">Recette</a>
      <a href="#Contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="/Monsite/imgaccueil.jpg" alt="Legume" width="1600" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge">SolidBIO</h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="/w3images/tablesetting2.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">SolidBIO</h1><br>
      <h5 class="w3-center">Site de recette en ligne</h5>
      <p class="w3-large">Bienvenue sur notre site de recette BIO
      <p class="w3-large w3-text-grey w3-hide-medium">Vous trouverez toute les recettes que vous rechercher en vous inscrivant sur notrez plateform </p>
    </div>
  </div>
  
  <hr>
  
  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Recette récente</h1><br>
      <h4></h4>
      <p class="w3-text-grey"></p><br>
    
      <h4></h4>
      <p class="w3-text-grey"></p><br>
    
      <h4></h4>
      <p class="w3-text-grey"></p><br>
    
      <h4></h4>
      <p class="w3-text-grey"></p><br>
    
      <h4></h4>
      <p class="w3-text-grey"></p>    
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <img src="/Monsite/imgrecette" class="w3-round w3-image w3-opacity-min" alt="Recette" style="width:100%">
    </div>
  </div>

  <hr>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-64" id="contact">
    <h1>Contact</h1><br>
    <p></p>
    <p class="w3-text-blue-grey w3-large"><b></b></p>
    <p></p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Pseudo" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="number" placeholder="Nom" required name="People"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
      <p><button class="w3-button w3-light-grey w3-section" type="submit">Envoyer un message</button></p>
    </form>
  </div>
  
<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
  <p>Powered by LM</a></p>
</footer>

</body>
</html>