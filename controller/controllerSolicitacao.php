<?php 

require ("./model/Solicitacao.php");

Class ControllerSolicitacao {
    


    public static function teste () {
        $solicitacao = new Solicitacao();
        return $solicitacao->escreve();
    }









}

?>