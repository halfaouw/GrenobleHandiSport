<?php

require_once('../model/Article.class.php');
require_once('../model/Panier.class.php');
require_once('../framework/view.class.php');

session_start();

$articlesDOA = new ArticleDOA();
$articles = $articlesDOA->getAll();

if (!isset($_SESSION['panier'])) {
  $_SESSION['panier'] = new Panier();
}

//Si on a cliqué sur "ajouter au panier !"
if (isset($_GET['action']) ) {
  if ($_GET['action'] == 'add') {

    //On parcours tout les articles pour verifier qu'il existe bien
    foreach ($articles as $key => $value) {
      if ($value->ref == $_GET['article']) {

        //On verifie s'il a deja été mis dans le panier
        $dejaPresent = false;
        foreach ($_SESSION['panier']->arrayArticle as $k => $val) {
          if ($val->ref == $value->ref) {   //Dans le cas ou il y est deja
            $val->plusUn();      //On incremente simplement sa quantitée
            $dejaPresent = true;  //On informe qu'il y est
          }
        }
        if (!$dejaPresent) { //si on l'a pas trouvé dans le panier, il faut donc l'ajouter
          $newArticle = new ArticlePanier($value); //on commence par le creer en donnant en parametre l'article lui correspondant
          $_SESSION['panier']->arrayArticle[] = $newArticle; //et on l'ajoute au panier
        }
      }
    }
    $_SESSION['panier']->setPrixTotal();
    $_SESSION['panier']->setNbArticle();
    //var_dump($_SESSION['panier']);
  }
}



$view = new View('articles.view.php');

$view->assign('articles',$articles);

$view->display('articles.view.php');



?>
