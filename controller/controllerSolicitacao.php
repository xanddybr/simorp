<?php 

require "./model/Solicitacao.php";

Class ControllerSolicitacao extends Solicitacao {
    
    public static function solRegPrec(array $SolReg) {

        $solRegPrec = new Solicitacao();
        $solRegPrec->set_nProcesso($SolReg[0]);
        $solRegPrec->set_tipoObjeto($SolReg[1]);
        $solRegPrec->set_dataReceb($SolReg[2]);
        $solRegPrec->set_dataEncam($SolReg[3]);
        $solRegPrec->set_uniGestora($SolReg[4]);
        $solRegPrec->set_obs($SolReg[5]);

        //Itens list
        $solRegPrec->set_descricao($SolReg[6]);
        $solRegPrec->set_tipObjeto($SolReg[7]);
        $solRegPrec->set_unidFornec($SolReg[8]);
        $solRegPrec->set_valorUnitario($SolReg[9]);
        $solRegPrec->set_quantidade($SolReg[10]);
        $solRegPrec->set_subTotal($SolReg[11]);
        //Itens list
       

    }
    
    
  

    





}

?>