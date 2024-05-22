<!-- Start the session -->
<?php session_start(); ?>

<?php include_once "./controller/ControllerSolicitacao.php"; ?>
<?php include_once "./controller/ControllerUsuario.php"; ?>
<?php include_once "./router/Router.php"; ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>

<title>Bem Vindo ao SIMORP</title>

<!-- load dependency libraries  -->
<link href="./css/bootstrap.min.css" rel="stylesheet">
<link href="./css/styles.css" rel="stylesheet">
<link href="./img/ico/pencil.ico" rel="icon" type="image/x-icon" >

<!-- load dependency libraries -->
<script src="./js/lumino.glyphs.js" type="text/javascript"></script>
<script src="./js/jquery.min.js" type="text/javascript"></script>
<script src="./js/index_set.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>

</head>

<script>


</script>

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

      // ENABLE ROUTES BY NAVIGATION AND LOAD PAGE HOME
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


</html>
