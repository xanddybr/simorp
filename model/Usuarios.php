
<?php

require 'ConectAPI.php';

Class Usuarios  {

        private int $idUser;
        private string $usuario;
        private string $nome;
        private string $sobrenome;
        private string $senha;
        private string $token;
        private string $perfil;
        private string $status;
           
    
     function set_idUser($idUser) {
        $this->idUser = $idUser;
      }

     function get_idUser() {
        return $this->idUser;
      }

     function set_usuario($usuario) {
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

     function set_senha($senha) {
        $this->senha = $senha;
      }

     function get_senha() {
        return $this->senha;
      }
      
     function set_token($token) {
        $this->token = $token;
      }

     function get_token() {
        return $this->token;
      }

     function set_perfil($perfil) {
        $this->perfil = $perfil;
      }

     function get_perfil() {
        return $this->perfil;
      }
 
     function set_status($status) {
        $this->status = $status;
      }

     function get_status() {
        return $this->status;
    }

      
     function LogonSession() {
    
         if(!isset($_SESSION['login'])) {
            
            $_SESSION["login"] = [$this->token,'logado'];
            

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
    
    
       function ValidateData($check) {
    
        //verify data coming of datasource  
        if(Usuarios::GetUserAPI() != 'false')  {

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
        setcookie('timeUser', null, null);
        unset($_COOKIE['timeUser']);
        $_SESSION['login'] = [null, null, null];
        session_destroy();
        header("location:/simorp_beta/login");
       }


       function TimeOut() {
        unset($_SESSION['login']);
        $_SESSION['login'] = [null, null, null];
        session_destroy();

       }
            
       
       //Exec connection with data-source API looking for user
       function GetUserAPI() {

              $userAPI = new ConectAPI();
              $userAPI->set_url('http://10.3.15.200:8002/auth/login/');             
              $dataUser = $userAPI->AuthAPI($this->usuario, $this->senha);
                        
        if(isset($dataUser['detail'])) {

        return 'false';

          } else {

                $this->nome = $dataUser['nome'];
                $this->sobrenome = $dataUser['sobrenome'];
                $this->perfil = $dataUser['perfil'];
                $this->token = $dataUser['access'];

            }
      }
       

       //Create cookie for storage user and password in browser
       function MakeUserCookie($check) {
        if(isset($check) && $check == true) {
          
          setcookie('rmb', 'checked', time() + 86400*90);
          setcookie('checkUser', $this->nome . " " . $this->sobrenome, time() + 86400*90);
          setcookie('timeUser', $this->nome, time() + 43200);
                  
       } else {

          setcookie('rmb', null);
          setcookie('checkUser', null);
       }
               
    } 

     //Exec connection with dataBAse looking for user
     function GetUserDataBase(){
    
     }
    
  }
  
 
       

 
?>