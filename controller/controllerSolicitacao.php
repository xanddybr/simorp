<?php 

require "./model/Solicitacao.php";

Class ControllerSolicitacao {
    


    public static function tipoAta () {
        $solicitacao = new Solicitacao();
        $solicitacao->set_idSol(8);
        $solicitacao->LoadSolId();
        return $solicitacao->get_obs();
    }





}

?>