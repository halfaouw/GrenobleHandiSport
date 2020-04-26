<?php


class squelette{

  public $header;
  public $footer;

  function __construct($css,$connecte) {

    $bouton;
    if (!$connecte) {
      $bouton = '
      <form action="../controler/user.ctrl.php">
          <button class="login"><i class="fa fa-sign-in"></i> Se connecter </button>
      </form>
      ';
    }else {
      $bouton = '
      <form action="../controler/espace.ctrl.php">
          <button class="espacePerso"><i class="fa fa-user"></i>Espace personnel</button>
      </form>
      ';
    }

    $this->header = '

    <html lang="fr">
    <head>
      <title>Accueil - Grenoble Handisport</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../view/design/'.$css.'">

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <link rel="icon" type="image/png" href="../view/design/Favicon.jpg" />

    </head>

    <header>
      <div class="titre">
        <h1>GRENOBLE HANDISPORT</h1>
        <h2>________</h2>
        <h3>Le sport pour tous</h3>
      </div>

            <div class="navbar">
                <ul>
                  <li><a href="Valatria.html">ACCUEIL</a></li>
                  <li><a href="#" aria-haspopup="true">LA VIE AU CLUB</a>
                    <ul class="dropdown" aria-label="submenu">
                      <li><a href="#">HISTORIQUE</a></li>
                    </ul>
                  </li>
                  <li><a href="#" aria-haspopup="true">SPORTS</a>
                    <ul class="dropdown" aria-label="submenu">
                      <li><a href="#">HOCKEY</a></li>
                      <li><a href="#">ESCRIME</a></li>
                      <li><a href="#">PARATENNIS</a></li>
                      <li><a href="#">TORBALL</a></li>
                      <li><a href="#">NATATION</a>
                        <ul class="dropdown" aria-label="submenu">
                          <li><a href="#">ECOLE DE NATATION</a></li>
                          <li><a href="#">NATATION ADULTE (HANDI NATATION)</a></li>
                        </ul>
                      </li>
                      <li><a href="#">SKI ALPIN</a></li>
                    </ul>
                  </li>
                  <li><a href="#" aria-haspopup="true">S\'INSCRIRE</a></li>
                  <li><a href="#" aria-haspopup="true">ACTUALITES</a></li>
                  <li><a href="#" aria-haspopup="true">CONTACT</a></li>
                  <li><a href="#" aria-haspopup="true">COMMENT NOUS AIDER</a></li>
                </ul>
            </div>
        </header>

    <body>

'.$bouton.'

    ';

    $this->footer = '
      </body>

      <footer>



        <div class="footer">

          <a href="https://www.facebook.com/search/top/?q=grenoble%20handisport" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-instagram"></a>

          <ul>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">La vie du club</a></li>
            <li><a href="#">Sports</a></li>
            <li><a href="#">S\'inscrire</a></li>
            <li><a href="#">Actualités</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Comment nous aider</a></li>
          </ul>


        <p>Copyright © 2020 Grenoble Handisport. All rights reserved.</p>

        </div>

      </footer>

      </html>

      ';
  }
}



 ?>
