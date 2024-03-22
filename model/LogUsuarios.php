
<?php

Class LogUsuarios {


        private int $idLog;
        private string $dataHora;
        private string $operacao;
        private string $objeto;
        private string $objetoData;
        private string $objetoId;

    

     /* public function __construct(int $idLog,string $dataHora,string $operacao,string $objeto,string $objetoData,string $objetoId) {
        
        $this->idLog = $idLog;
        $this->dataHora = $dataHora;
        $this->operacao = $operacao;
        $this->objeto = $objeto;
        $this->objetoData = $objetoData;
        $this->objetoId = $objetoId;
    
      } */

      public function set_idLog(int $idLog) {
        $this->idLog = $idLog;
      }

      public function get_idLog() {
        return $this->idLog;
      }

      public function set_dataHora($dataHora) {
        $this->dataHora = $dataHora;
      }

     public function get_dataHora() {
        return $this->dataHora;
      }

      public function set_operacao($operacao) {
        $this->operacao = $operacao;
      }

     public function get_operacao() {
        return $this->operacao;
      }

      public function set_objeto($objeto) {
        $this->objeto = $objeto;
      }

     public function get_objeto() {
        return $this->objeto;
      }

      public function set_objetoData($objetoData) {
        $this->objetoData = $objetoData;
      }

     public function get_objetoData() {
        return $this->objetoData;
      }

      public function set_objetoId($objetoId) {
        $this->objetoId = $objetoId;
      }

     public function get_objetoId() {
        return $this->objetoId;
      }


   
}



?>
