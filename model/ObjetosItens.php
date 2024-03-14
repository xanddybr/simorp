<?php

Class ObjetosItens {


         private $idProd;
         private $descricao;
         private $tipObjeto;
         private $unidFornec;
         private $valorUnitario;
         private $quantidade;
         private $subTotal;
            

     function __constructor($idProd,$descricao,$tipObjeto,$unidFornec,$valorUnitario,$quantidade,$subTotal) {

         $this->idProd = $idProd;
         $this->descricao = $descricao;
         $this->tipObjeto = $tipObjeto;
         $this->unidFornec = $unidFornec;
         $this->valorUnitario = $valorUnitario;
         $this->quantidade = $quantidade;
         $this->subTotal = $subTotal;
     }
            
   function set_idProd($idProd) {
        $this->idProd = $idProd;
     }
   function get_idProd() {
        return $this->idProd;
     }

   function set_descricao($descricao) {
        $this->descricao = $descricao;
    }
   function get_descricao() {
        return $this->descricao;
   }

   function set_tipObjeto($tipObjeto) {
        $this->tipObjeto = $tipObjeto;
    }
   function get_tipObjeto() {
        return $this->tipObjeto;
    }

   function set_unidFornec($unidFornec) {
        $this->unidFornec = $unidFornec;
    }
   function get_unidFornec() {
        return $this->idReg;
    }

   function set_valorUnitario($valorUnitario) {
        $this->valorUnitario = $valorUnitario;
    }
   function get_valorUnitario() {
        return $this->valorUnitario;
    }

   function set_quantidade($quantidade) {
        $this->quantidade = $quantidade;
    }
   function get_quantidade() {
       return $this->quantidade;
    }

   function set_subTotal($subTotal) {
       $this->subTotal = $subTotal;
    }
   function get_subTotal() {
        return $this->subTotal;
    }



}
?>