<?php

require_once('../framework/view.class.php');
session_start();


$view = new View('commande.view.php');

$view->display('commande.view.php');

//Pour continuer le processus de commande : l'utilisateur entre ses coordonnées, valide, puis ces informations sont enregistré dans la
//base de donnée ainsi que le panier

 ?>
