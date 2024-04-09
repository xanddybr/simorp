<?php

require "./model/Usuario.php";

Class ControllerUsuario {
      

    public static function Logon($user, $pass, $check) {
        
        $usuario = new Usuario();
        
        $usuario->set_usuario($user);
        $usuario->set_senha($pass);
        $usuario->ValidateData($check);
       
    }

    public static function LogonTeste($user,$pass,$check) {
        
        $usuario = new Usuario();
        
        $usuario->set_usuario($user);
        $usuario->set_senha($pass);
        $usuario->Homologation($check = null);
       
    }

    public static function Logout() {
        $usuario = new Usuario();
        $usuario->LogoutSession();
        
    }

    public static function TimeOut() {
        $usuario = new Usuario();
        $usuario->LogoutSessionTimeOut();
    }

   
    
}


