<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Head'Style</title>
    <link rel="stylesheet" href="CSS/marque.css">

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


<h2 class="titre_la_marque">  La Marque</h2>  <br> <br> <br>

<!--
<div class="1er_bloc">

<img class ="img_automne" src="IMG/automne.jpg"/>



<p class="1er_paraph"> <span class="1er_span">Une large gamme de bérets traditionnels ou tendances </span>  <br> <br>

 Vous avez envie d’un béret à la Française Laulhère ou d’une casquette à la Gatsby,
 de porter du Made in France, la légende Stetson, du Kangol ou du Brixton pour assumer votre petit côté hipster (mais si allez) ?
 Et bien chez HeadStyl’ nous vous proposons tout ça, au même endroit dans toutes les couleurs, matières et formes possibles, du béret en laine au duckbill
 en passant par la gavroche. </p>

 </div>
 <div class="2eme_bloc">

<img class ="img_fourure" src="IMG/fourure.jpg"/>



<p class="2eme_paraph">  Également des écharpes et foulards
 Nous ne serions pas complets sans vous proposer des écharpes et des
 foulards qui seront vraiment, mais alors vraiment très bien assortis
 à votre couvre-chef ! Et même des gants.</p>


</div>-->

  <div class="1er_bloc">
  <img class ="img_automne" src="IMG/automne.jpg"/>
 <p> Une large gamme de bérets traditionnels ou tendances <br><br>

 Vous avez envie d’un béret à la Française Laulhère ou d’une casquette à la Gatsby,
 de porter du Made in France, la légende Stetson, du Kangol ou du Brixton pour assumer votre petit côté hipster (mais si allez) ?
 Et bien chez HeadStyl’ nous vous proposons tout ça, au même endroit dans toutes les couleurs, matières et formes possibles, du béret en laine au duckbill
 en passant par la gavroche. </p>

 </div>


 <div class ="2eme_bloc">
   <img class ="img_fourure" src="IMG/fourure.jpg"/> <br> <br> <br>
 <p> Également des écharpes et foulards <br><br>

 Nous ne serions pas complets sans vous proposer des écharpes et des
 foulards qui seront vraiment, mais alors vraiment très bien assortis
 à votre couvre-chef ! Et même des gants.
</p>

</div>

<div class ="3eme_bloc">
   <img class ="img_casquette" src="IMG/casquette.jpg"/> <br> <br> <br>
 <p class="3eme_paraph"> Découvrez de nombreuses possibilités de personnalisation <br><br>

  Enfin, parce que nous sommes tous unique, HeadStyl’ vous propose de créer votre propre casquette personnalisée ou la
  personnalisation de bonnet en broderie 3D ou gravure laser sur un patch 100% cuir. Vous pouvez également personnaliser la casquette ou le
  bonnet de marque de votre choix avec votre signature, surnom ou le nom de votre team brodé sur le côté..
</p>

</div>


<br> <br> <br>


<h4 class="dernier_bloc">HeadStyl’ c’est aussi une équipe disponible et à votre service </h4>


<p class="dernier_paraph">
Depuis 2009, HeadStyl’ s’efforce de proposer une offre à la fois qualitative, exhaustive et accessible avec une qualité de service toujours plus exigeante.
Parce que nous savons que l’attente d’un colis peut être insoutenable, nous vous expédions votre commande le jour même (si elle est passé avant 14h).
 Chaque colis est préparé avec soin, emballé avec amour et livré avec ponctualité par nos transporteurs (en 48h). Et parce qu’il n’est pas encore possible de
 toucher le feutre d’un chapeau ou de vérifier la douceur d’une chapka à travers son écran d’ordinateur, notre service client met ses petites mains et son oeil
 expert à votre disposition : une question sur une taille, une couleur, une matière ou l’entretien d’un produit, nous nous engageons à vous apporter le
 meilleur conseil. Nos couvre-chefs et nous-mêmes sommes situés dans cette paisible ville d’Annecy, en Haute-Savoie, là où grâce au climat et à une situation
 géographique avantageuse, nous pouvons tester les chapeaux en paille en conditions réelles, sur les plages ensoleillées du bord du lac, et faire subir à nos
 bonnets les conditions d’un hiver rigoureux sur les pistes de ski. Pour en savoir plus sur nos produits ou sur nous, suivez-nous sur les réseaux sociaux sur
 notre page Facebook ou notre compte Twitter. Et parce que nous aussi on aimerait bien vous connaître, postez-nous vos plus beaux selfies sur Instagram !
</p>




<br> <br> <br>





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
