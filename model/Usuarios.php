
<?php

require 'ConnectAPI.php';

Class Usuarios  {
  

        private int $idUser;
        private string $usuario;
        private string $nome;
        private string $sobrenome;
        private string $senha;
        private string $token;
        private string $perfil;
        private string $status;
           
    
     function set_idUser(int $idUser) {
        $this->idUser = $idUser;
      }

     function get_idUser() {
        return $this->idUser;
      }

     function set_usuario(string $usuario) {
        $this->usuario = $usuario;
      }

     function get_usuario() {
        return $this->usuario;
      }

     function set_nome($nome) {
        $this->nome = $nome;
      }

     function get_nome() {
        return $this->nome;
      }

     function set_sobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
      }

     function get_sobrenome() {
        return $this->sobrenome;
      }

     function set_senha(string $senha) {
        $this->senha = $senha;
      }

     function get_senha() {
        return $this->senha;
      }
      
     function set_token(string $token) {
        $this->token = $token;
      }

     function get_token() {
        return $this->token;
      }

     function set_perfil(string $perfil) {
        $this->perfil = $perfil;
      }

     function get_perfil() {
        return $this->perfil;
      }
 
     function set_status(string $status) {
        $this->status = $status;
      }

     function get_status() {
        return $this->status;
    }

/*
    function __construct($idUser, $usuario, $nome, $sobrenome, $senha, $token, $perfil, $status) {

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

    function Homologation() {
      if(!isset($_SESSION['login'] )) {

        if($this->usuario == "homolog" && $this->senha == "123") {

          $_SESSION["login"] = ['HOMOLOGAÇÃO','logado'];
          setcookie('timeUser', $this->usuario , time() + 7200); // time duration 10hs 

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

      
    function LogonSession() {
    
         if(!isset($_SESSION['login'])) {

          try {
                  $_SESSION["login"] = [$this->nome . " " . $this->sobrenome, $this->token,'logado'];
                  setcookie('timeUser', $this->nome , time() + 7200); // time duration 10hs 

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


      function TimeOutSession() {
        $_SESSION['login'] = [null, null, null];
        session_destroy();
      }
    
    
       function ValidateData($check) {
    
        //verify data coming of datasource and authentic user 
        if(Usuarios::AuthenticUserAPI() != 'false')  {

            // Message if user and password diferent
                Usuarios::LogonSession();
                Usuarios::MakeUserCookie($check);
                
             
            } else {

              echo "<div class='col-lg-12'>";
              echo "<div class='alert bg-danger' role='alert'>";
              echo "<svg class='glyph stroked cancel'><use xlink:href='#stroked-cancel'></use></svg> Usuario ou senha estão inválidos! <a href='' class='pull-right'><span class='glyphicon glyphicon-remove'></span></a>";
              echo  "</div>";
              echo "</div>";                  
                     
        }
      } 

    
      // function for logout user     
        function LogoutSession() {

        
        $_SESSION['login'] = [null, null, null];
        setcookie('timeUser', null , null);  
        session_destroy();
        header("location:/simorp_beta/login");

       }


      //Exec connection with data-source API
       function AuthenticUserAPI() {

          $user = array($this->usuario, $this->senha);
          $userAPI = new AthuAPI('http://10.3.15.200:8002/auth/login/', true, $user);
          $dataUser = array();
          $dataUser = $userAPI->SearchInAPI();
                        
        if(isset($dataUser['detail'])) {

        return 'false';

          } else {

                echo $this->nome = $dataUser['nome'];
                echo $this->sobrenome = $dataUser['sobrenome'];
                echo $this->perfil = $dataUser['perfil'];
                echo $this->token = $dataUser['access'];

            }

      }


      function RequestsAPI($url, $post, $postfields, $action) {

        $userAPI = new ConectAPI($url, $post, $postfields, $action, $this->$token);
        $dataUser = array();
        $dataUser = $userAPI->RequestAPI();
                      
      if(isset($dataUser['detail'])) {

      return 'false';

        } else {

              print_r($dataUser);

          }

    }
       

       //Create cookie for storage user and password in browser
       function MakeUserCookie($check) {
        if(isset($check) && $check == true) {
          
          setcookie('rmb', 'checked', time() + 86400*90);
          setcookie('checkUser', $this->usuario, time() + 86400*90);
          
                  
       } else {

          setcookie('rmb', null, 0);
          setcookie('checkUser', null, 0);
          
       }
               
    } 

     //Exec connection with dataBAse looking for user
     function GetUserDataBase(){
    
     }
    
  }

  

 
?>