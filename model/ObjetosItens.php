<?php

Class ObjetosItens {


         private int $idProd;
         private string $descricao;
         private string $tipObjeto;
         private string $unidFornec;
         private float $valorUnitario;
         private int $quantidade;
         private float $subTotal;
            

     function __constructor(int $idProd, string $descricao, string $tipObjeto, string $unidFornec, float $valorUnitario, int $quantidade, float $subTotal) {

         $this->idProd = $idProd;
         $this->descricao = $descricao;
         $this->tipObjeto = $tipObjeto;
         $this->unidFornec = $unidFornec;
         $this->valorUnitario = $valorUnitario;
         $this->quantidade = $quantidade;
         $this->subTotal = $subTotal;
     }
            
   function set_idProd(int $idProd) {
        $this->idProd = $idProd;
     }
   function get_idProd() {
        return $this->idProd;
     }

   function set_descricao(string $descricao) {
        $this->descricao = $descricao;
    }
   function get_descricao() {
        return $this->descricao;
   }

   function set_tipObjeto(string $tipObjeto) {
        $this->tipObjeto = $tipObjeto;
    }
   function get_tipObjeto() {
        return $this->tipObjeto;
    }

   function set_unidFornec(string $unidFornec) {
        $this->unidFornec = $unidFornec;
    }
   function get_unidFornec() {
        return $this->idReg;
    }

   function set_valorUnitario(float $valorUnitario) {
        $this->valorUnitario = $valorUnitario;
    }
   function get_valorUnitario() {
        return $this->valorUnitario;
    }

   function set_quantidade(int $quantidade) {
        $this->quantidade = $quantidade;
    }
   function get_quantidade() {
       return $this->quantidade;
    }

   function set_subTotal(float $subTotal) {
       $this->subTotal = $subTotal;
    }
   function get_subTotal() {
        return $this->subTotal;
    }



}
?>