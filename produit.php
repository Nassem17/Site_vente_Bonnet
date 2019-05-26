<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Head'Style</title>
    <link rel="stylesheet" href="CSS/produits.css"/>

  </head>
  <body>


<header>
<?php
$date = date("d-m-Y");
$heure = date("H:i");
Print("Le $date à $heure");
?>

<nav>
        <div class="header">
          <!-- <a href="./accueil.html"><img class="logo_bonnet" src="./IMG/.." alt="bonnet"/></a> -->
        </div>
        <div class="navbar">
           <ul class="ulnavbar">
             <li class="linavbar"><a class="anavbar" href="./accueil.php">Accueil</a></li>
             <li class="linavbar"><a class="anavbar" href="./marque.php">La marque</a></li>
             <li class="linavbar"><a class="anavbar" href="./produit.php">Nos produits</a></li>
             <li class="linavbar"><a class="anavbar" href="./contact.php">Contact</a></li>
           </ul>
         </div>
         <!-- <div class="div_panier"> -->
           <!-- <img class="img_ux" src="./IMG/profile.png"> -->
           <!-- <span class="text_panier"> <a href="./inscriptions.html">Inscription</a><br><a href="./connexion.html">Se connecter</a></span> -->
           <!-- <a href="./panier.html"><img class="img_panier" src="./IMG/panier.png" alt="Panier"/></a>
           <a href="./panier.html"><p class="panier">Panier: 299€</p></a> -->
         </div>
       </nav>
    </header>



<h2> Nos produits</h2>






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
    <a href="https://www.facebook.com/" target="_blank"><img class="img_facebook" src="./IMG/facebook.png" alt="Facebook"/></a>
    <a href="https://twitter.com/?lang=fr" target="_blank"><img class="img_twitter" src="./IMG/twitter.png" alt="Twitter"/></a>
    <a href="https://www.instagram.com/?hl=fr" target="_blank"><img class="img_instagram" src="./IMG/instagram.png" alt="Instagram"/></a>
  </div>
</footer>



    </body>


    </html>
