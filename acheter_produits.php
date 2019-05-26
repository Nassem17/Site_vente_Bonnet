<html>
<head>
    <title>

    </title>
    <meta charset="utf-8" />
<link rel="stylesheet" href="CSS/	acheter_produits.css"/>
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
             <li class="linavbar"><a class="anavbar" href="./marque.html">La marque</a></li>
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



	<div class="resume_commande">
    <?php
        if(isset($_GET['choice']) && isset($_GET['quantity_product']) && isset($_GET['valider']))  {
            $produit = $_GET["choice"];
		$quantity_product = $_GET["quantity_product"];
			$frais_livraison = 3.50;
             $c = count($produit);
            for ($i=0;$i<$c;$i++)
            {
				switch($i) {

					case 0:

					echo '<h2 class="résumé_commande"> Résumé de votre commande </h2>  <br/>';
					echo '<img src="IMG/bonnetapompom.png"/> &nbsp <br/><br/>';
                    echo "Logo Shirt : 8 euros <br/> <br/> ";


				    echo 'Quantité choisie : ' .$quantity_product. ' <br/> <br/>' ;
					echo 'Frais de port : ' .$frais_livraison. ' euros <br/> <br/>';

					if ($quantity_product) {
					$total = ($quantity_product * 8) + $frais_livraison;
					echo 'Ca vous fera un total de : '. $total.' euros <br/> <br/>';
					echo ' <input type="button" name="valider" value="Payer"/>';

					}
					break;


					case 1:

					echo '<h2 class="résumé_commande"> Résumé de votre commande </h2>  <br/>';
					echo '<img class="img_bonnet_long" src="IMG/bonnet-long.jpg"/> &nbsp <br/><br/>';
                    echo "Bonnet long : 8 euros <br/> <br/> ";

					echo 'Quantité choisie : '.$quantity. ' <br/> <br/>' ;
					echo 'Frais de port : ' .$frais_livraison. ' euros <br/> <br/>';
					if ($quantity) {
					$total = ($quantity * 8) + $frais_livraison;
					echo 'Ca vous fera un total de : '. $total.' euros <br/> <br/>';
					echo ' <input type="button" name="valider" value="Payer"/>';

					}

					break;

					case 2:

					echo '<h2 class="résumé_commande"> Résumé de votre commande </h2>  <br/>';
					echo '<img class="img_bonnet_revers" src="IMG/bonnet-revers.jpg"/> &nbsp <br/> <br/>';
                    echo "Bonnet a revers : 10 euros <br/> <br/> ";
					if ($quantity) {
					$total = ($quantity * 8) + $frais_livraison;
					echo 'Ca vous fera un total de : '. $total.' euros <br/> <br/>';
					echo ' <input type="button" name="valider" value="Payer"/>';

					}

					break;
					case 3:

					echo '<h2 class="résumé_commande"> Résumé de votre commande </h2>  <br/>';
					echo '<img class="img_bonnet-docker" src="IMG/bonnet-docker.jpg"/> &nbsp <br> <br>';
                    echo "Bonnet Docker : 10 euros <br> <br> ";
					if ($quantity) {
					$total = ($quantity * 8) + $frais_livraison;
					echo 'Ca vous fera un total de : '. $total.' euros <br/> <br/>';
					echo ' <input type="button" name="valider" value="Payer"/>';
					}

					break;
					case 4:

					echo '<h2 class="résumé_commande"> Résumé de votre commande </h2>  <br/>';
					echo '<img class="img_bonnet_court" src="IMG/bonnet_court.jpg"/> &nbsp <br> <br>';
                    echo "Bonnet court : 9 euros <br> <br> ";
					if ($quantity) {
					$total = ($quantity * 8) + $frais_livraison;
					echo 'Ca vous fera un total de : '. $total.' euros <br/> <br/>';
					echo ' <input type="button" name="valider" value="Payer"/>';
					}


					break;
					case 5:

					echo '<h2 class="résumé_commande"> Résumé de votre commande </h2>  <br/>';
					echo '<img class="img_bonnet_pompou_fourure" src="IMG/bonnet_pompom_fourure.jpg"/> &nbsp <br> <br>';
                    echo "Bonnet pompom fourrues : 10 euros  <br> <br>";
					if ($quantity) {
					$total = ($quantity * 8) + $frais_livraison;
					echo 'Ca vous fera un total de : '. $total.' euros <br/> <br/>';
					echo ' <input type="button" name="valider" value="Payer"/>';
					}

					break;

					case 6:

					echo '<h2 class="résumé_commande"> Résumé de votre commande </h2>  <br/>';
					echo '<img class="img_bonbou_peruvien" src="IMG/bonbon_peruvien.jpg"/> &nbsp <br> <br>';
                    echo "Bonnet péruvien : 7 euros  <br> <br>";

					if ($quantity) {
					$total = ($quantity * 8) + $frais_livraison;
					echo 'Ca vous fera un total de : '. $total.' euros <br/> <br/>';
					echo ' <input type="button" name="valider" value="Payer"/>';
					}



					break;

					case 7:

					echo '<h2 class="résumé_commande"> Résumé de votre commande </h2>  <br/>';
					echo '<img class="img_chapka" src="IMG/chapka.jpg"/> &nbsp <br>';
                    echo "Chapka : 9 euros ";
					if ($quantity) {
					$total = ($quantity * 8) + $frais_livraison;
					echo 'Ca vous fera un total de : '. $total.' euros <br/> <br/>';
					echo ' <input type="button" name="valider" value="Payer"/>';
					}

					break;
					case 8:

					echo '<h2 class="résumé_commande"> Résumé de votre commande </h2>  <br/>';
					echo '<img class="img_cache_oreille"src="IMG/cache_oreille.jpg"/> &nbsp <br> <br>';
                    echo "Cahe-oreilles : 7 euros  <br> <br>";

					if ($quantity) {
					$total = ($quantity * 8) + $frais_livraison;
					echo 'Ca vous fera un total de : '. $total.' euros <br/> <br/>';
					echo ' <input type="button" name="valider" value="Payer"/>';
					}
					break;

				 default:
        echo "Choisissez un article";
}




                }


				}





        else {
			 header('Location: list_produits.php');
			echo "Veuillez choisir un article";}

        ?>
        </div>






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
