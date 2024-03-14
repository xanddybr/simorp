


<?php

/*
// CONSUME API WHIT CURL PHP SIMPLE GET WITHOUT AUTHENTICATION
//set URL


//set url of destiny
$url = "www.treinamentosiga.rj.gov.br/mercatto/aplicacao/api/ataregistro.asp?o=get_ataregistro";

//start CURL 
$client = curl_init();

//set options of header for access
curl_setopt($client, CURLOPT_URL, $url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

//execute request and retrieve resp of host
$response = curl_exec($client);

//load variable result with json Object (param true convert to array)
$result = json_decode($response, true);


print_r($result);
*/


$curl = curl_init();

$token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbl90eXBlIjoiYWNjZXNzIiwiZXhwIjoxNzA5OTYzMjY4LCJpYXQiOjE3MDk5MjAwNjgsImp0aSI6IjgxMTA4NDA5YmZjNjQ5YjNiN2NkZWQ2OThlODU4MTkwIiwidXNlcl9pZCI6M30.n_KTgG9_Z-HXvMKFtr3zYYiKwrVQ6aPvmvXklUsvTx0';
$auth  = array('Authorization: Bearer ' . $token );
  
curl_setopt($curl, CURLOPT_POST, false);
curl_setopt($curl, CURLOPT_HTTPHEADER, $auth); 
curl_setopt($curl, CURLOPT_URL, 'http://10.3.15.200:8002/orgaos/');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

$result = curl_exec($curl);
$result_json = json_decode($result);

if(!$result) { 
    die("Falha na conexão");
}

curl_close($curl);

print_r($result);

?>

