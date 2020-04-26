<?php



class Panier {
  public $nbarticle;
  public $prixTotal;
  public $arrayArticle;


  public function setNbArticle(){
    $this->nbarticle = 0;
    foreach ($this->arrayArticle as $key => $value) {
      $this->nbarticle = $this->nbarticle + $value->quantite;
    }
  }

  public function setPrixTotal(){
    $this->prixTotal = 0;
    foreach ($this->arrayArticle as $key => $value) {
      $this->prixTotal = $this->prixTotal + ($value->quantite * $value->prixUnitaire);
    }
  }

  public function viderPanier(){
    $this->arrayArticle = array();
    $this->nbarticle = 0;
    $this->prixTotal = 0;
  }

  public function __construct(){
    $this->arrayArticle = array();
    $this->nbarticle = 0;
    $this->prixTotal = 0;

    //$this->arrayArticle = array();
  }
}




 ?>
