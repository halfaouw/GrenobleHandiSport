<?php

require_once('../model/Article.class.php');
require_once('../model/Panier.class.php');
require_once('../framework/view.class.php');


session_start();


if (!isset($_SESSION['panier'])) {
  $_SESSION['panier'] = new Panier();
}


//var_dump($_SESSION['panier']);

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'suppr') {
        $_SESSION['panier']->viderPanier();
    }
}



$view = new View('panier.view.php');

$view->assign('panier',$_SESSION['panier']);

$view->display('panier.view.php');





?>
