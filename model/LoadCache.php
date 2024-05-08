<?php

Class LoadCache {


    private string $_url;
    private string $_pathCache;

    public function Load(){

            $ch = curl_init();

            // set URL and other appropriate options
            curl_setopt($ch, CURLOPT_URL, $this->_url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
            curl_setopt($ch, CURLOPT_HEADER, 0);
            
            // grab URL and pass it to the browser
            $out = curl_exec($ch);
            
            // close cURL resource, and free up system resources
            curl_close($ch);
            
            $fp = fopen($_pathCache, 'w');
            fwrite($fp, $out);
            fclose($fp);

    }
   
}




?>