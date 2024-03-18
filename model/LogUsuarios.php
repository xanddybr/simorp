
<?php

Class LogUsuarios {


    private int $idLog;
    private string $dataHora;
    private string $operacao;
    private string $objeto;
    private string $objetoData;
    private string $objetoId;

    

      function __construct(int $idLog,string $dataHora,string $operacao,string $objeto,string $objetoData,string $objetoId) {
        
        $this->idLog = $idLog;
        $this->dataHora = $dataHora;
        $this->operacao = $operacao;
        $this->objeto = $objeto;
        $this->objetoData = $objetoData;
        $this->objetoId = $objetoId;
    
      }

      function set_idLog(int $idLog) {
        $this->idLog = $idLog;
      }

      function get_idLog() {
        return $this->idLog;
      }

      function set_dataHora($dataHora) {
        $this->dataHora = $dataHora;
      }

     function get_dataHora() {
        return $this->dataHora;
      }

      function set_operacao($operacao) {
        $this->operacao = $operacao;
      }

     function get_operacao() {
        return $this->operacao;
      }

      function set_objeto($objeto) {
        $this->objeto = $objeto;
      }

     function get_objeto() {
        return $this->objeto;
      }

      function set_objetoData($objetoData) {
        $this->objetoData = $objetoData;
      }

     function get_objetoData() {
        return $this->objetoData;
      }

      function set_objetoId($objetoId) {
        $this->objetoId = $objetoId;
      }

     function get_objetoId() {
        return $this->objetoId;
      }


   
}



?>
