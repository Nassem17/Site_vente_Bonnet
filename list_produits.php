<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Head'Style</title>
    <link rel="stylesheet" href="CSS/list_produits.css"/>

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
             <li class="linavbar"><a class="anavbar" href="./produit.html">Le bonnet parfait</a></li>
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





<h2 class="h2_center"> Le bonnet Parfait  </h2>




<ul class ="products">
        <form action ="acheter_produits.php" method="get"/>

        <li>

        <img src="IMG/bonnetapompom.png"/>
            <h4> Bonnet a pompom </h4>
            <p> 8 euros</p>

            Quantity (between 1 and 5):
  <input type="number" id="quantity" name="quantity_product" min="1" max="5"/> <br/>
            <input type="checkbox" name="choice[]" value="1"/>
        </li>

        <li>
            <!-- faire même GET pour les autres liens-->

            <img class="img_bonnet_long" src="IMG/bonnet-long.jpg"/>
            <h4> Bonnet long</h4>
            <p>8 euros</p>

             Quantity (between 1 and 5):
  <input type="number" name="quantity" min="1" max="5"> <br/>
            <input type="checkbox" name="choice[]" value="2"/>
    </li>

	<li>

        <img class="img_bonnet_revers" src="IMG/bonnet-revers.jpg"/>
            <h4>Bonnet a revers </h4>
            <p> 10€</p>

            Quantity (between 1 and 5):
  <input type="number" name="quantity" min="1" max="5"/> <br/>
            <input type="checkbox" name="choice[]" value="1"/>
        </li>



		<li>

        <img class="img_bonnet-docker" src="IMG/bonnet-docker.jpg"/>
            <h4>Bonnet Docker  </h4>
            <p> 10€</p>

            Quantity (between 1 and 5):
  <input type="number" name="quantity" min="1" max="5"/> <br/>
            <input type="checkbox" name="choice[]" value="1"/>
        </li>

		<br/>

		<li>

        <img class="img_bonnet_court" src="IMG/bonnet_court.jpg"/>
            <h4>Bonnet court  </h4>
            <p> 9 euros</p>

            Quantity (between 1 and 5):
  <input type="number" name="quantity" min="1" max="5"/> <br/>
            <input type="checkbox" name="choice[]" value="1"/>
        </li>


			<li>

        <img class="img_bonnet_pompou_fourure" src="IMG/bonnet_pompom_fourure.jpg"/>
            <h4>Bonnet pompom fourrues  </h4>
            <p> 10 euros</p>

            Quantity (between 1 and 5):
  <input type="number" name="quantity" min="1" max="5"/> <br/>
            <input type="checkbox" name="choice[]" value="1"/>
        </li>

			<li>

        <img class="img_bonbou_peruvien" src="IMG/bonbon_peruvien.jpg"/>
            <h4>Bonnet péruvien  </h4>
            <p> 7 euros</p>

            Quantity (between 1 and 5):
  <input type="number" name="quantity" min="1" max="5"/> <br/>
            <input type="checkbox" name="choice[]" value="1"/>
        </li>




			<li>

        <img class="img_chapka" src="IMG/chapka.jpg"/>
            <h4>Chapka  </h4>
            <p> 9 euros</p>

            Quantity (between 1 and 5):
  <input type="number" name="quantity" min="1" max="5"/> <br/>
            <input type="checkbox" name="choice[]" value="1"/>
        </li>

		<br/>

			<li>


        <img class="img_cache_oreille"src="IMG/cache_oreille.jpg"/>
            <h4>Cache-oreilles  </h4>
            <p> 7 euros</p>

            Quantity (between 1 and 5):
  <input type="number" name="quantity" min="1" max="5"/> <br/>
            <input type="checkbox" name="choice[]" value="1"/>
        </li>






	<!-- more list items -->

        </ul> <br/> <br/>
        <input class="valid_achat" id="valider" type="submit" name="valider" value="Validez vos achats"/>





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
