<?php

require "./model/Usuario.php";

Class ControllerUsuario {
      

    static function Logon($user, $pass, $check) {
        
        $usuario = new Usuario();
        
        $usuario->set_usuario($user);
        $usuario->set_senha($pass);
        $usuario->ValidateData($check);
       
    }

    static function LogonTeste($user,$pass,$check) {
        
        $usuario = new Usuario();
        
        $usuario->set_usuario($user);
        $usuario->set_senha($pass);
        $usuario->Homologation($check = null);
       
    }

    static function Logout() {
        $usuario = new Usuario();
        $usuario->LogoutSession();
        
    }

    static function TimeOut() {
        $usuario = new Usuario();
        $usuario->TimeOutSession();
    }

    
}


