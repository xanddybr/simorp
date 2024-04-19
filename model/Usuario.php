<?php

require_once 'ConnectAPI.php';
require_once 'Modal.php';

Class Usuario {
  

        private int $idUser;
        private string $usuario;
        private string $nome;
        private string $sobrenome;
        private string $senha;
        private string $token;
        private string $perfil;
        private string $status;
           
    
     public function set_idUser(int $idUser) {
        $this->idUser = $idUser;
      }

     public function get_idUser() {
        return $this->idUser;
      }

     public function set_usuario(string $usuario) {
        $this->usuario = $usuario;
      }

     public function get_usuario() {
        return $this->usuario;
      }

     public function set_nome(string $nome) {
        $this->nome = $nome;
      }

     public function get_nome() {
        return $this->nome;
      }

     public function set_sobrenome(string $sobrenome) {
        $this->sobrenome = $sobrenome;
      }

     public function get_sobrenome() {
        return $this->sobrenome;
      }

     public function set_senha(string $senha) {
        $this->senha = $senha;
      }

     public function get_senha() {
        return $this->senha;
      }
      
     public function set_token(string $token) {
        $this->token = $token;
      }

     public function get_token() {
        return $this->token;
      }

     public function set_perfil(string $perfil) {
        $this->perfil = $perfil;
      }

     public function get_perfil() {
        return $this->perfil;
      }
 
     public function set_status(string $status) {
        $this->status = $status;
      }

     public function get_status() {
        return $this->status;
    }

/*
    public function __construct($idUser, $usuario, $nome, $sobrenome, $senha, $token, $perfil, $status) {

        $this->idUser = $idUser;
        $this->usuario = $usuario;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->senha = $senha;
        $this->token = $token;
        $this->perfil = $perfil;
        $this->status = $status;

    }
 */ 

 
//Exec connection with data-source API
        public function AuthenticUserAPI($check) {

            /* $dataUser = array('username'	=> $this->_usuario, 'password'  => $this->_senha); */

            $userAPI = new DataSourceAPI(); 
            $userAPI->set_url('http://10.3.15.200:8002/auth/login/');
            $user = array('username' => $this->usuario, 'password' => $this->senha);
            $userAPI->set_postfields($user);
            $data = $userAPI->AuthAPI();

                          
          if(isset($data['detail'])) {

                 echo Modal::MsgBox('Por favor, verifique o seu usuario e senha!');

            } else {

                  $this->set_nome($data['nome']);
                  $this->set_sobrenome($data['sobrenome']);
                  $this->set_perfil($data['perfil']);
                  $this->set_token($data['access']);
                    
                  Usuario::LogonSession($check);
                  
              }
              
          }

          
    public function Homologation() {
      if(!isset($_SESSION['login'] )) {

        if($this->usuario == "homolog" && $this->senha == "123") {

          $_SESSION["login"] = ['HOMOLOGAÇÃO','logado'];
          setcookie('timeUser', $this->usuario , time() + 7200); // time duration 1:00h 

        if(isset($_SESSION['login'])){
          
             header("location:/simorp_beta/home");

        } else { 

              echo "<div class='col-lg-12'>";
              echo "<div class='alert bg-danger' role='alert'>";
              echo "<svg class='glyph stroked cancel'><use xlink:href='#stroked-cancel'></use></svg>Dados de homologação incorretos!!!<a href='' class='pull-right'><span class='glyphicon glyphicon-remove'></span></a>";
              echo  "</div>";
              echo "</div>";

        }

      }
      
    }  
    }

        
      public function LogoutSessionTimeOut() {
        $_SESSION['login'] = [null, null, null];
        session_destroy();
      }
      
    
      // public function for logout user     
      public function LogoutSession() {
        
        $_SESSION['login'] = [null, null, null];
        setcookie('timeUser', null , null);  
        session_destroy();
        header("location:/simorp_beta/login");

       }


      public function LogonSession($check) {
    
        if(!isset($_SESSION['login'])) {

         try {
                 $_SESSION["login"] = [$this->nome . " " . $this->sobrenome, $this->token,'logado'];
                 setcookie('timeUser', $this->nome , time() + 43200); // time duration 10hs
                 Usuario::MakeUserCookie($check);

         } catch(Exception $e){

                 echo "Erro na tentativa de criar a sessão!";
         }
         
           if(isset($_SESSION['login'])){
             
                header("location:/simorp_beta/home");

           } else {

             echo "<div class='col-lg-12'>";
             echo "<div class='alert bg-danger' role='alert'>";
             echo "<svg class='glyph stroked cancel'><use xlink:href='#stroked-cancel'></use></svg>Erro ao tentar iniciar a sessão, Já existe uma sessão iniciada!!!<a href='' class='pull-right'><span class='glyphicon glyphicon-remove'></span></a>";
             echo  "</div>";
             echo "</div>";

           }
        

       } else {
   
             echo "<div class='col-lg-12'>";
             echo "<div class='alert bg-danger' role='alert'>";
             echo "<svg class='glyph stroked cancel'><use xlink:href='#stroked-cancel'></use></svg> Já existe uma sessão iniciada, ou usuário já esta logado!!!<a href='' class='pull-right'><span class='glyphicon glyphicon-remove'></span></a>";
             echo "</div>";
             echo "</div>";
                     
         }
     }


       //Create cookie for storage user and password in browser
      public function MakeUserCookie($check) {
        if(isset($check) && $check == true) {
          
          setcookie('rmb', 'checked', time() + 86400*90);
          setcookie('checkUser', $this->usuario, time() + 86400*90);
          
                  
       } else {

          setcookie('rmb', null, 0);
          setcookie('checkUser', null, 0);
          
       }
               
    } 

   
  }

  

 
?>