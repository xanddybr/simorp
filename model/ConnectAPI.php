<?php

Class DataSourceAPI {

                       
            private string $_customrequest;
            private string $_url;
            private array $_httpheader;
            private array $_postfields;
            private bool $_returntransfer = true;
           

            public function get_url(){
                return $this->_url;
            }
        
            public function set_url($_url){
                $this->_url = $_url;
            }
        
            public function get_httpheader(){
                return $this->_httpheader;
            }
        
            public function set_httpheader($_httpheader){
                $this->_httpheader = array('Authorization: Bearer ' . $_httpheader);
            }
        
            public function get_postfields(){
                return $this->_postfields;
            }
        
            public function set_postfields($_postfields){
                $this->_postfields = $_postfields;
            }

            public function get_customrequest(){
              return $this->_customrequest;
            }
      
            public function set_customrequest($_customrequest){
              $this->_customrequest = $_customrequest;
            }
           
           

      public function AuthAPI() {

                        $curl = curl_init();
                                          
                        curl_setopt($curl, CURLOPT_POST, true);
                        curl_setopt($curl, CURLOPT_URL, $this->_url);
                        curl_setopt($curl, CURLOPT_POSTFIELDS, $this->_postfields);
                        curl_setopt($curl, CURLOPT_RETURNTRANSFER, $this->_returntransfer);
                        curl_setopt($curl, CURLOPT_HTTPAUTH, $this->_curlauth_basic);
                        curl_close ($curl);                       
              

                        if(!$result = curl_exec($curl)){
                          
                          die('Os dados não poderam ser carregados!');
                       
                        } else {
                          $result_json = json_decode($result, true);
                          return $result_json;
                        }
  
        }

     
        public function GetAPI() {

                      $curl = curl_init();
                                    
                      curl_setopt($curl, CURLOPT_HTTPHEADER, $this->_httpheader); 
                      curl_setopt($curl, CURLOPT_URL, $this->_url);
                      curl_setopt($curl, CURLOPT_RETURNTRANSFER, $this->_returntransfer);
                      curl_close($curl);

                      if(!$result = curl_exec($curl)){
                          
                        die('Os dados não poderam ser carregados!');
                     
                      } else {
                        $result_json = json_decode($result, true);
                        return $result_json;
                      }

        }
                  
          
        public function GetForIdAPI($id) {

                      $curl = curl_init();
                    
                      curl_setopt($curl, CURLOPT_HTTPHEADER, $this->_httpheader); 
                      curl_setopt($curl, CURLOPT_URL, $this->_url . $id .'/');
                      curl_setopt($curl, CURLOPT_RETURNTRANSFER, $this->_returntransfer);
                      
                      $result = curl_exec($curl);
                      $result_json = json_decode($result, true);
                      curl_close($curl);

                      if(!$result = curl_exec($curl)){
                          
                        die('Os dados não poderam ser carregados!');
                     
                      } else {
                        $result_json = json_decode($result, true);
                        return $result_json;
                      }

        }
                    
        

        public function PostInAPI($arrayData) {

                      $curl = curl_init();
                      $array_Data = http_build_query($arrayData);

                      curl_setopt($curl, CURLOPT_POST, true);    
                      curl_setopt($curl, CURLOPT_HTTPHEADER, $this->_httpheader); 
                      curl_setopt($curl, CURLOPT_URL, $this->_url);
                      curl_setopt($curl, CURLOPT_POSTFIELDS, $array_Data);
                      curl_setopt($curl, CURLOPT_RETURNTRANSFER, $this->_returntransfer);
                      curl_close($curl);

                      if(!$result = curl_exec($curl)){
                          
                        die('Erro ao efetuar a postagem!');
                     
                      } else {
                        $result_json = json_decode($result, true);
                        return $result_json;
                      }

                                            
                

        }


        public function PutInAPI($arrayData) {

                      $curl = curl_init();
                      $array_Data = http_build_query($arrayData);
                          
                      curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
                      curl_setopt($curl, CURLOPT_HTTPHEADER, $this->_httpheader); 
                      curl_setopt($curl, CURLOPT_URL, $this->_url . $arrayData['id'] .'/');
                      curl_setopt($curl, CURLOPT_POSTFIELDS, $array_Data);
                      curl_setopt($curl, CURLOPT_RETURNTRANSFER, $this->_returntransfer);
                      curl_close($curl);
                      
                      if(!$result = curl_exec($curl)){
                          
                        die('Erro ao tentar atualizar os dados!');
                     
                      } else {
                        $result_json = json_decode($result, true);
                        return $result_json;
                      }

                    

        }


        public function DeleteInAPI($id) {

                      $curl = curl_init();
               
                      curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE');
                      curl_setopt($curl, CURLOPT_HTTPHEADER, $this->_httpheader); 
                      curl_setopt($curl, CURLOPT_URL, $this->_url . $id .'/');
                      curl_setopt($curl, CURLOPT_RETURNTRANSFER, $this->_returntransfer);
                      curl_close($curl);
                      
                      if(!$result = curl_exec($curl)){
                          
                        die('Erro ao tentar deletar os dados!');
                     
                      } else {
                        $result_json = json_decode($result, true);
                        return $result_json;
                      }

        }
            
}




  //$requestAPI = new DataSourceAPI();
  //$requestAPI->set_url('http://10.3.15.200:8002/orgaos/');
  //$requestAPI->set_httpheader('eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbl90eXBlIjoiYWNjZXNzIiwiZXhwIjoxNzEwOTg1ODM5LCJpYXQiOjE3MTA5NDI2MzksImp0aSI6IjgzNDdlNGYxZDczYTQ5MDZhZDM3YTFmZmVmZjk4NWZjIiwidXNlcl9pZCI6M30.JeJAt5e74Pb9P2nsdIimvZ0KNnQeoS2KoXJGjiKS6Dk');
  //$data = array('id' => 14, 'nome' => 'EXERCITO BRASILEIRO', 'usuario' => 'alexandre', 'created_at' => '2024-01-04T17:37:19', 'updated_at' => '2024-01-04T17:37:19');
  



        

            






      









?>

