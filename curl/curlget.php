<?php

//script get OK

$curl = curl_init();

$token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbl90eXBlIjoiYWNjZXNzIiwiZXhwIjoxNzEwNTY0NTQ0LCJpYXQiOjE3MTA1MjEzNDQsImp0aSI6IjZlN2M5YTJlODRlMzQzNWFhYzQ5YTFmYjE5YjBmZjg0IiwidXNlcl9pZCI6M30.gkWbxNGLQOotWhM8FX5T7J4Uum7jQf9Cwa_unt1DDo0';
$auth  = array('Authorization: Bearer ' . $token );
  
curl_setopt($curl, CURLOPT_POST, false);
curl_setopt($curl, CURLOPT_HTTPHEADER, $auth); 
curl_setopt($curl, CURLOPT_URL, 'http://10.3.15.200:8002/orgaos/');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

//curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

$result = curl_exec($curl);
$result_json = json_decode($result, true);

if(!$result) { 

    die("Falha na conexão");
}

   foreach ($result_json[0] as $index => $value){
        echo $value . "<br>";
}






        
        
       

?>

