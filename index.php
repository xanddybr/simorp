<!-- Start the session -->
<?php session_start(); ?>

<?php include_once "./controller/controllerSolicitacao.php"; ?>
<?php include_once "./controller/controllerUsuario.php"; ?>
<?php include_once "./router/Router.php"; ?>

 
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bem Vindo ao SIMORP</title>

<!-- Load dependency Bootstraps Framewoks  -->
<link href="./css/bootstrap.min.css" rel="stylesheet">
<link href="./css/bootstrap.css" rel="stylesheet">
<link href="./css/styles.css" rel="stylesheet">

<!--load Icons and javascripts-->
<link rel="icon" type="image/x-icon" href="img/ico/pencil.ico">
<script src="./js/lumino.glyphs.js"></script>
<script src="./js/jquery-1.11.1.min.js"></script>

</head>

<?php

      $rota = new Router();
      $rota->set_url($_SERVER['SERVER_NAME']);
      $rota->set_uri($_SERVER['REQUEST_URI']);
           
     
   if(!isset($_SESSION["login"]) && !isset($_COOKIE['timeUser'])) {
      
      if(isset($_POST['acao'])) {
      
      //CALL FUNCTION LOGIN USER
    
            ControllerUsuario::Logon($_POST['usuario'], $_POST['senha'], isset($_POST['remember'])); 
                       
      } else { 
                             
      }
      // START APP IN PAGE LOGIN
      $rota->StartAppLogin();
      
      } else {

      // ENABLE ROUTES FOR NAVIGATION AFTER CREATED SESSION
      
      $rota->setRouter();

      if(!isset($_COOKIE['timeUser'])){
            ControllerUsuario::TimeOut();
      }
                        
      if(isset($_GET['url']) && $_GET['url'] == "logout"){
            ControllerUsuario::Logout();
      }
      
      if(isset($_GET['url']) && $_GET['url'] == "login"){
            ControllerUsuario::Logout();
      }

      if(!isset($_GET['url']) && $_GET['url'] == NULL ){
            ControllerUsuario::Logout();
      }
     

     
}
   
?>

<!-- BEGIN BODY HERE -->

</html>
