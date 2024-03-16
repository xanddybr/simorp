<?php

require ("./model/Usuarios.php");

class ControllerUsuarios {
      

    function Logon($user,$pass,$check) {
        
        $usuario = new Usuarios();
        
        $usuario->set_usuario($user);
        $usuario->set_senha($pass);
        $usuario->ValidateData($check);
       
    }

    function Logout() {
        $usuario = new Usuarios();
        $usuario->LogoutSession();
        
    }

    function TimeOut() {
        $usuario = new Usuarios();
        $usuario->TimeOutSession();
    }
    
}


