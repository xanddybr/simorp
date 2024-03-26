<?php 


if(isset($_POST['salvar'])) { 

    $data = array();
    $data = $_POST['solRegPrec'];

    echo $data[0] . " ". $data[1] . " ". $data[2] . " ". $data[3] . " ". $data[4] . " ". $data[5] . " ". $data[6];

}



?>