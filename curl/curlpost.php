
<?php

//set url of destiny
$url = "http://10.3.15.200:8002/auth/login/";

$data_array = array('name' => 'morpheus', 'job' => 'leader');

$data = http_build_query($data_array);

$client = curl_init();


//set options of header for access
curl_setopt($client, CURLOPT_URL, $url);
curl_setopt($client, CURLOPT_POST, true);
curl_setopt($client, CURLOPT_POSTFIELDS, $data);
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);


//execute request and retrieve resp of host
$response = curl_exec($client);

//load variable result with json Object (param true convert to array)
$result = json_decode($response);

foreach($result as $key => $val) {
    echo $key . ":" . $val . "<br>";
}





?>