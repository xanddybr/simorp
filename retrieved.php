<?php 

// create a new cURL resource
$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL, "www.treinamentosiga.rj.gov.br/mercatto/aplicacao/api/ataregistro.asp?o=get_unidades");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_HEADER, 0);

// grab URL and pass it to the browser
$out = curl_exec($ch);

// close cURL resource, and free up system resources
curl_close($ch);


$fp = fopen('./data/data0.json', 'w');
fwrite($fp, $out);
fclose($fp);


?>