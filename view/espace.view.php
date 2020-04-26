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


<h1>Votre espace personnel</h1>


<a href="../controler/espace.ctrl.php?action=logout">Se déconnecter</a>


 <!-- ================================================ -->
 <!-- ================================================ -->

 <?php

 echo "$squelette->footer"; // BALISE BODY FERMANTE + FOOTER

  ?>
