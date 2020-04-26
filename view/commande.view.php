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





<form  action="" method="POST" enctype="multipart/form-data">
<input type="hidden" name="action" value="submit">


<!-- CODE EN DESSOUS GENERE DES ERREURS -->
<!-- <p>Votre nom : <?= $_SESSION['user']->nom ?><br> </p>

<p>Votre email :  <?= $_SESSION['user']->email ?> <br> </p> -->

Addresse de livraison :<br>
<input name="adress" type="text" value="" size="30" required="required"/><br><br><br>

<input type="submit" value="Submit"/>
</form>




<!-- ================================================ -->
<!-- ================================================ -->

<?php

echo "$squelette->footer"; // BALISE BODY FERMANTE + FOOTER

 ?>
