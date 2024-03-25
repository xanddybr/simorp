<?php

require_once 'ConnectAPI.php';

Class ObjetoItens {


         private int $idProd;
         private string $descricao;
         private string $tipObjeto;
         private string $unidFornec;
         private float $valorUnitario;
         private int $quantidade;
         private float $subTotal;
            

    /* public function __constructor(int $idProd, string $descricao, string $tipObjeto, string $unidFornec, float $valorUnitario, int $quantidade, float $subTotal) {

         $this->descricao = $descricao;
         $this->tipObjeto = $tipObjeto;
         $this->unidFornec = $unidFornec;
         $this->valorUnitario = $valorUnitario;
         $this->quantidade = $quantidade;
         $this->subTotal = $subTotal;
     }*/

            
   public function set_idProd(int $idProd) {
        $this->idProd = $idProd;
     }
   public function get_idProd() {
        return $this->idProd;
     }

   public function set_descricao(string $descricao) {
        $this->descricao = $descricao;
    }
   public function get_descricao() {
        return $this->descricao;
   }

   public function set_tipObjeto(string $tipObjeto) {
        $this->tipObjeto = $tipObjeto;
    }
   public function get_tipObjeto() {
        return $this->tipObjeto;
    }

   public function set_unidFornec(string $unidFornec) {
        $this->unidFornec = $unidFornec;
    }
   public function get_unidFornec() {
        return $this->idReg;
    }

   public function set_valorUnitario(float $valorUnitario) {
        $this->valorUnitario = $valorUnitario;
    }
   public function get_valorUnitario() {
        return $this->valorUnitario;
    }

   public function set_quantidade(int $quantidade) {
        $this->quantidade = $quantidade;
    }
   public function get_quantidade() {
       return $this->quantidade;
    }

   public function set_subTotal(float $subTotal) {
       $this->subTotal = $subTotal;
    }
   public function get_subTotal() {
        return $this->subTotal;
    }



}
?>