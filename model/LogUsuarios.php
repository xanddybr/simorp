
<?php

Class LogUsuarios {


    private int $idLog;
    private string $dataHora;
    private string $operacao;
    private string $objeto;
    private string $objetoData;
    private string $objetoId;


      function set_idLog($idLog) {
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

$log = new LogUsuarios();
$log->set_operacao('INCLUSÃO DE NOVO USUARIO');


?>
