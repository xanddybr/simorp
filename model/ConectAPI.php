<?php

Class ConectAPI {

    public $url;
    public $authentication = '0';


    function set_url($url) {
        $this->url = $url;

    }

    function AuthAPI($user, $pass) {

        $curl = curl_init();

        $dataUser = array(
            'username'	=> $user,
	        'password'  => $pass
        );
        
        curl_setopt($curl, CURLOPT_POST, true); //
        curl_setopt($curl, CURLOPT_POSTFIELDS, $dataUser);
        curl_setopt($curl, CURLOPT_URL, $this->url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
       
        $result = curl_exec($curl);
        $result_json = json_decode($result, true);
        

        if(!$result) { 
          
          return false;
        
        } else {
           
          return $result_json;

        }

    }
    
    
}

?>

