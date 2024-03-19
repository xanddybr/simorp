<?php

Class DataSourceAPI {

           
            
              private bool $_post;
              private string $_action;
              private string $_url;
              private string $_httpheader;
              private array $_postfields;
              private bool $_returntransfer = true;
              private string $_curlauth_basic = 'CURLAUTH_BASIC';


      function __construct(string $url, bool $post, array $postfields = null, string $httpheader, string $action) {

                $this->_post = $post;
                $this->_action = $action;
                $this->_url = $url;
                $this->_httpheader = $httpheader;
                $this->_postfields = $postfields;
                     
      }

      function __construct(string $url, bool $post, string $httpheader) {
                
                $this->_url = $url;
                $this->_post = $post;
                $this->_httpheader = $httpheader;
                
                    
      }

      function AuthAPI() {

                $curl = curl_init();
                                          
                        curl_setopt($curl, CURLOPT_POST, $this->_post);
                        curl_setopt($curl, CURLOPT_URL, $this->_url);
                        curl_setopt($curl, CURLOPT_POSTFIELDS, $this->_postfields);
                        curl_setopt($curl, CURLOPT_RETURNTRANSFER, $this->_returntransfer);
                        curl_setopt($curl, CURLOPT_HTTPAUTH, $this->_curlauth_basic);
                        curl_close ($curl);                       
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
              

              return $result_json;

        }
     }

     function GetAPI () {

            $curl = curl_init();
                
                $token  = array('Authorization: Bearer ' . $this->_httpheader);
                  
                //$id = 7; //id user individual

                      curl_setopt($curl, CURLOPT_POST, $this->_post);
                      curl_setopt($curl, CURLOPT_HTTPH_EADER, $this->_httpheader); 
                      curl_setopt($curl, CURLOPT_URL, $this->_url . $id .'/');
                      curl_setopt($curl, CURLOPT_RETURNTRANSFER, $this->_returntransfer);
                      
                $result = curl_exec($curl);
                $result_json = json_decode($result, true);

                if(!$result) { 

                    die("Falha na conexão");
                }
                  
                        foreach($result_json as $index => $value) {
                            echo $value . " = " . $index . "<br>";
                        }
                    

            }


        
}

$api = new DataSourceAPI('http://10.3.15.200:8002/orgaos/', false, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbl90eXBlIjoiYWNjZXNzIiwiZXhwIjoxNzEwOTIxNTEyLCJpYXQiOjE3MTA4NzgzMTIsImp0aSI6IjYxYTU1M2VjNjQ4OTQwZjA5ZWE2YWExODVjOWJiNDkyIiwidXNlcl9pZCI6M30.OIpTZfIsMPgIfCnZksRxVtpnj6cchZYTM7OlqFRjlrg');
$api->GetAPI();



      









?>

