<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Serv'Drone</title>
    <link rel="stylesheet" href="CSS/contact.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i" rel="stylesheet">
  </head>

<body>

  <html>
  <head>
      <title>

      </title>
      <meta charset="utf-8" />
  <!-- <link rel="stylesheet" href="CSS/	acheter_produits.css"/> -->
      </head>

      <body>
    <header>
  <?php
  $date = date("d-m-Y");
  $heure = date("H:i");
  Print("Le $date à $heure");
  ?>

  <header>


  <nav>
          <div class="header">
            <!-- <a href="./accueil.html"><img class="logo_bonnet" src="./IMG/.." alt="bonnet"/></a> -->
          </div>
          <div class="navbar">
             <ul class="ulnavbar">
               <li class="linavbar"><a class="anavbar" href="./accueil.php">Accueil</a></li>
               <li class="linavbar"><a class="anavbar" href="./marque.php">La marque</a></li>
               <li class="linavbar"><a class="anavbar" href="./produit.html">Nos produits</a></li>
               <li class="linavbar"><a class="anavbar" href="./acheter_produits.php">Le bonnet parfait</a></li>
               <li class="linavbar"><a class="anavbar" href="./contact.php">Contact</a></li>
             </ul>
           </div>
           <!-- <div class="div_panier"> -->
             <!-- <img class="img_ux" src="./IMG/profile.png"> -->
             <!-- <span class="text_panier"> <a href="./inscriptions.html">Inscription</a><br><a href="./connexion.html">Se connecter</a></span> -->
             <!-- <a href="./panier.html"><img class="img_panier" src="./IMG/panier.png" alt="Panier"/></a>
             <a href="./panier.html"><p class="panier">Panier: 299€</p></a> -->
           </nav>
      </header>

<div class="formulaire">
<div class="box_black">
  <p class="nc">Nous contacter</p>
</div>
<form method="post" action="">

<label for="name"> Nom : </label>  <input type="text" name="name" id="name"/> <br> <br>

<label for="email">Email : </label>  <input type="email" name="email"id="email"/>  <br> <br>
  <label for="message">Message : </label><br /><br>
    <textarea name="message" id="message" rows="10" cols="90"></textarea> <br>

    <input type="button" value="Envoyer"name="envoyer"/> <br> <br>
</form>
</div>


<br>
<br>
<br>

<h2 class= "ou"> Où sommes nous ? </h1>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2544.592905531693!2d3.515782415728647!3d50.3741449794649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2edd9c1442b63%3A0x12d19ed85c800b25!2s80+Avenue+Roland+Moreno%2C+59410+Anzin!5e0!3m2!1sfr!2sfr!4v1555067486596!5m2!1sfr!2sfr" width="1300" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>


<footer class="footer">

  <div class="newsletter">

    <p class="txtnewsletter">Inscrivez-vous à la newsletter pour recevoir les dernières promotions</p>

    <form method="post" action="traitement.php">

      <input type="email" name="email" id="email" class="mail" placeholder="Saisir une adresse mail"/>

    </form>

    <button class="inscrire" type="button" name="button">S’inscrire</button>

    <p class="copyright">@Copyright</p>

  </div>

  <div class="avis_legal">

    <ul class="ulfooter">

      <li class="lifooter"><a class="afooter" href="./mention_legal.html">Mentions légales</a></li>

      <li class="lifooter"><a class="afooter" href="./cgu.html">Condition générale d’utilisation</a></li>

      <li class="lifooter"><a class="afooter" href="./cgv.html">Condition générale de vente</a></li>

      <li class="lifooter"><a class="afooter" href="./contact.html">Contact</a></li>

    </ul>

  </div>

  <div class="reseaux_sociaux">

    <p class="reseaux">Suivez nous sur nos réseaux</p>

    <a href="https://www.facebook.com/" target="_blank"><img class="img_facebook" src="./IMG/fb_gris.png" alt="Facebook"/></a>

    <a href="https://twitter.com/?lang=fr" target="_blank"><img class="img_twitter" src="./IMG/twitter_gris.png" alt="Twitter"/></a>

    <a href="https://www.instagram.com/?hl=fr" target="_blank"><img class="img_instagram" src="./IMG/insta_gris.png" alt="Instagram"/></a>

  </div>

</footer>

</body>

</html>
