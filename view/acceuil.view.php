<?php

require_once('squelette.view.php');


if (isset($_SESSION['user'])) {
  $connecte = true;
}else {
  $connecte = false;
}

$squelette = new squelette('stylesheet.css',$connecte,'accueil');

echo "$squelette->header"; //HEAD + HEADER + BALISE BODY OUVRANTE

 ?>

 <!-- ================================================ -->
 <!-- ================================================ -->

 <div class="centre">

 <!--
       <div class="Column">
         <a href="https://www.farming-simulator.com/">  <img src="RightAdd.jpg" alt="Farming Simulator Add" style = "width:100%; height : 100%;"> </a>
       </div>
 -->
       <div class="Slider">

         <div id="myCarousel" class="carousel slide" data-ride="carousel">

           <!-- Indicators -->
           <ol class="carousel-indicators">
             <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
             <li data-target="#myCarousel" data-slide-to="1"></li>
             <li data-target="#myCarousel" data-slide-to="2"></li>
             <li data-target="#myCarousel" data-slide-to="3"></li>
             <li data-target="#myCarousel" data-slide-to="4"></li>

           </ol>

           <!-- Wrapper for slides -->
           <div class="carousel-inner">
             <div class="item active">
               <img src="../view/design/hockey1.jpg" alt="Image de Hockey" style="width:100%; height:430px">
             </div>

             <div class="item">
               <img src="../view/design/piscine.jpg" alt="Image de Piscine" style="width:100%; height:430px">
             </div>

             <div class="item">
               <img src="../view/design/le-torball-me-libere-de-la-colere.jpg" alt="Image d'une partie de torball" style="width:100%;height:430px">
             </div>

             <div class="item">
               <img src="../view/design/IMG_2123.jpg" alt="Tractor 3" style="width:100%;height:430px">
             </div>

             <div class="item">
               <img src="../view/design/IMG_2122.jpg" alt="Tractor 3" style="width:100%;height:430px">
             </div>
           </div>

           <!-- Left and right controls -->
           <a class="left carousel-control" href="#myCarousel" data-slide="prev">
             <span class="glyphicon glyphicon-chevron-left"></span>
             <span class="sr-only">Previous</span>
           </a>
           <a class="right carousel-control" href="#myCarousel" data-slide="next">
             <span class="glyphicon glyphicon-chevron-right"></span>
             <span class="sr-only">Next</span>
           </a>
         </div>

       </div>
 <!--
       <div class="Column">
         <a href="https://eurotrucksimulator2.com/">  <img src="LeftAdd.jpg" alt="Euro Truck Simulator Add" style = "width:100%; height : 100%;"> </a>
       </div>
 -->
 </div>

 <div class="bienvenue">

   <h3>Bienvenue Sur le site de Grenoble Handisport</h3>
   <p>
 <b>Grenoble Handisport</b> est une association sportive (Loi 1901 reconnue d’utilité publique) visant à favoriser, développer la pratique des activités physiques et sportives chez les handicapés moteurs et sensoriels de toutes origines, ainsi que les liens d’amitiés entre les membres adhérents.<br>
 <b>Grenoble Handisport</b> vous propose les disciplines suivantes: </p>

 <li>Hockey en fauteuil</li>
 <li>Escrime (Escrime en fauteuil)</li>
 <li>Natation (Handi Natation)</li>
 <li>Ski Alpin: Ski assis en uniski et dualski, Ski debout, Ski guidé pour mal voyant</li>
 <li>Tennis en fauteuil (Paratennis)</li>
 <li>Torball</li>
 <p>
  Ces disciplines vous sont proposées en loisir et en compétition
 Certaines de ces disciplines se pratiquent en partenariat avec des clubs valides.
 </p>

 </div>



<!-- ================================================ -->
<!-- ================================================ -->

<?php

echo "$squelette->footer"; //FOOTER + BALISE BODY FERMANTE

 ?>
