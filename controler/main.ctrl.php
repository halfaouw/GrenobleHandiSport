<?php
//
// require_once('../framework/view.class.php');
//
//
// if (isset($_GET['page'])) {
//   $page = $_GET['page'];
// } else {
//   $page = '';
// }
//
// echo "$page";
//
// if ($page = '') {
//   include('../view/acceuil.view.php');
// }else {
//   $view = new View('acceuil.view.php');
//   $view->page = $page;
//   $view->display("acceuil.view.php");
// }
//
//



// Inclus le mini framework
require_once('../framework/view.class.php');
require_once('../model/User.class.php');

session_start();    // pour detruire la session : session_destroy();



$view = new View('acceuil.view.php');

$view->display("acceuil.view.php");

?>
