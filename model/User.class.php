<?php

  class User {

    public $nom;
    public $email;
    public $id;
    public $statut;

    public function __construct(string $nom, string $email, int $id, string $statut) {
      $this->nom = $nom;
      $this->email = $email;
      $this->id = $id;
      $this->statut = $statut;
    }
  }

   class MyDB extends SQLite3 {

      function __construct() {
         $this->open('../data/sqlite/base.db');
      }
   }

 ?>
