
<?php

//set put ok

$curl = curl_init();

$token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbl90eXBlIjoiYWNjZXNzIiwiZXhwIjoxNzEwNTY0NTQ0LCJpYXQiOjE3MTA1MjEzNDQsImp0aSI6IjZlN2M5YTJlODRlMzQzNWFhYzQ5YTFmYjE5YjBmZjg0IiwidXNlcl9pZCI6M30.gkWbxNGLQOotWhM8FX5T7J4Uum7jQf9Cwa_unt1DDo0';
$auth  = array('Authorization: Bearer ' . $token);

$id = 4;

$data_array = array('id' => $id, 'nome' => 'MARINHA2055', 'usuario' => 'allan', 'created_at' => '2024-01-04T17:37:19', 'updated_at' => '2024-01-04T17:37:19');
$data = http_build_query($data_array);


//set options of header for access

curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($curl, CURLOPT_HTTPHEADER, $auth); 
curl_setopt($curl, CURLOPT_URL, 'http://10.3.15.200:8002/orgaos/' . $id . '/');
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//execute request and retrieve resp of host
$result = curl_exec($curl);
$result_json = json_decode($result, true);

echo $result;

//load variable result with json Object (param true convert to array)




?>