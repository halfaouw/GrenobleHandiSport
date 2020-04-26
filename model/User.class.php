<?php

  class User {

    public $nom;
    public $email;
    public $id;

    public function __construct(string $nm, string $mail, int $id) {
      $this->nom = $nm;
      $this->email = $mail;
      $this->id = $id;
    }
  }

   class MyDB extends SQLite3 {

      function __construct() {
         $this->open('../data/sqlite/base.db');
      }
   }

 ?>
