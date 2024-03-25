<?php 

require "./model/Solicitacao.php";

Class ControllerSolicitacao {
    
    public static function solRegPrec(array $SolReg) {
        $solRegPrec = new Solicitacao();
        $solRegPrec->SalvarSolRegPrec($SolReg);
    }
    
    public static function get_nProcesso(){
        $solRegPrec = new Solicitacao();
        return $solRegPrec->get_nProcesso();
    }
  

    





}

?>