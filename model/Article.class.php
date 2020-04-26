<?php

class ArticleDOA {
  private $bdd;

  function __construct() {
    try {
      $this->bdd = new PDO('sqlite:../data/sqlite/base.db');
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }

  }

  public function getAll() : array {

    $requete = $this->bdd->query("SELECT * FROM article");

    $result = $requete->fetchAll(PDO::FETCH_CLASS,"Article");

    return $result;
  }
}


class Article {
  public $nom;
  public $description;
  public $prix;
  public $ref;
  public $photo;
  public $type;

  public $corps;


  public function getcorps($page): string{
      $corps = '
      <div class="article">
        <img src="../view/design/'.$this->photo.'" >
        <div>
            <div class="header">
              <h1>'.$this->nom.'</h1>
              <p>'.$this->prix.'€</p>
            </div>
            <p><b>Description :</b> '.$this->description.'</p>
            <div class="button_cont" align="center"><a class="example_d" href="?page='.$page.'&action=add&article='.$this->ref.'" >Ajouter au panier !</a></div>
        </div>
      </div>
      ';
      return $corps;
  }


  public function __construct()
  {

  }
}

class ArticlePanier {
  public $nom;
  public $description;
  public $prixUnitaire;
  public $ref;
  public $photo;
  public $type;

  public $prixTotal;
  public $quantite;

  public $corps;


  public function getcorps($page): string{
      $corps = '
      <div class="article">
        <img src="../view/design/'.$this->photo.'" >
        <div>
            <div class="header">
              <h1>'.$this->nom.'</h1>
              <p>'.$this->prixTotal.'€</p> <br>
              <p>'.$this->quantite.'x'.$this->prixUnitaire.'€</p>
            </div>
            <p><b>Description :</b> '.$this->description.'</p>
        </div>
      </div>
      ';
      return $corps;
  }

  public function __construct(Article $article){

    $this->nom = $article->nom;
    $this->description = $article->description;
    $this->prixUnitaire = $article->prix;
    $this->ref = $article->ref;
    $this->photo = $article->photo;
    $this->type = $article->type;

    $this->quantite = 1;
    $this->prixTotal = $article->prix;
  }

  public function plusUn(){
    $this->quantite += 1;
    $this->prixTotal = $this->prixTotal + $this->prixUnitaire;
  }

}




 ?>
