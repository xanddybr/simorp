
<?php



$curl = curl_init();

$user_data = array(
	'username'	=> 'alexandre.souza',
	'password'  => 'Alex@1797'
);

curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $user_data);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

$result = curl_exec($curl);
$result_json = json_decode($result, true);

if(!$result) { 
    die("Falha na conexão");
}

curl_close($curl);

print_r($result_json);



?>