<?php

Class AthuAPI {

           
            private string $_url;
            private bool $_post;
            private array $_postfields;
            private bool $_returntransfer = true;
            


      function __construct(string $url, bool $post, array $postfields) {

                $this->_url = $url;
                $this->_post = $post;
                $this->_postfields = $postfields;
            

      }

      function SearchInAPI() {

                $curl = curl_init();

                /* $token = array('Authorization: Bearer ' . $this->_httpheader);*/

                $dataUser = array (
                    'username'	=> $this->_postfields[0],
                    'password'  => $this->_postfields[1]
                );
               
                curl_setopt($curl, CURLOPT_POST, $this->_post); //
                curl_setopt($curl, CURLOPT_URL, $this->_url);
                /*curl_setopt($curl, CURLOPT_HTTPHEADER, $token);*/
                curl_setopt($curl, CURLOPT_POSTFIELDS, $dataUser);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, $this->_returntransfer);
                
                                
                try {

                  $result = curl_exec($curl);
                  
                } catch (Exception $e){
                     throw new Exception("não foi possivel conectar");
                }               
                
        if(!$result) { 

              throw new Exception("Não foi possivel estabelecer uma conexão com a API");
              
          return false;
        
        } else {

              $result_json = json_decode($result, true);
              curl_close($curl);

              return $result_json;

        }

        

    }

        
}


Class RequestsAPI {


                private string $_url;
                private bool $_post;
                private array $_postfields;
                private string $_action;
                private string $_httpheader;
                private bool $_returntransfer = true;


        function __construct(string $url, bool $post, array $postfields, string $action, string $token) {

                $this->_url = $url;
                $this->_post = $post;
                $this->_postfields = $postfields;
                $this->_action = $action;
                $this->_httpheader = $httpheader;
                
                
          }

            
        function RequestAPI() { 
                
                $curl = curl_init();

                $token = array('Authorization: Bearer ' . $this->_httpheader);

                
                curl_setopt($curl, CURLOPT_POST, $this->_post);
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $this->action);
                curl_setopt($curl, CURLOPT_URL, $this->_url);
                curl_setopt($curl, CURLOPT_HTTPHEADER, $token);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $this->$_postfields);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, $this->_returntransfer);
                
                                
                try {

                $result = curl_exec($curl);
                
                } catch (Exception $e){
                    throw new Exception("não foi possivel conectar");
                }               
        
            if(!$result) { 

            throw new Exception("Não foi possivel estabelecer uma conexão com a API");
            
            return false;

            } else {

            $result_json = json_decode($result, true);
            curl_close($curl);

            prnit_r($result_json);

        }

    }

}










?>

