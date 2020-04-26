<?php

require_once('squelette.view.php');

if (isset($_SESSION['user'])) {
  $connecte = true;
}else {
  $connecte = false;
}

$squelette = new squelette('stylesheet2.css',$connecte);
echo "$squelette->header"; //HEAD + HEADER + BALISE BODY OUVRANTE

 ?>

 <!-- ================================================ -->
 <!-- ================================================ -->


<div class="body">

  <h2> Votre Panier </h2>

<h3>Resume de votre panier :</h3>
<br>
<p>Nombre d'articles :   <?= $panier->nbarticle?>   </p>
<p>------ Gâteaux : </p>
<p>------ Petites Faims : </p>
<p>============================</p>
<p>Total : <?= $panier->prixTotal?>€</p>

<a href="../controler/panier.ctrl.php?action=suppr">Vider le panier</a> <br> <br>

<?php

if (isset($_SESSION['user'])) {
  echo '<a href="../controler/commande.ctrl.php">Passer la commande</a>';
}else {
  echo "<p> Vous devez être connecté pour valider la commande";
}

 ?>

<h3>Detail :</h3>

  <div class="liste">



<?php

foreach ($panier->arrayArticle as $key => $value) {

   echo " <div class=\"ligne\"> ";
   $case = $value->getcorps($value->type);
   echo "$case";
   echo "  </div>";

}
?>

</div>




<!-- ================================================ -->
<!-- ================================================ -->

<?php

echo "$squelette->footer"; //FOOTER + BALISE BODY FERMANTE

 ?>
