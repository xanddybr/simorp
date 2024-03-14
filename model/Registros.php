<?php 

Class Registros {

        private $idReg;    
        private $nProcesso;
        private $uniGestora;
        private $nAta;
        private $tipoObjeto;
        private $tipoAta;
        private $itens;
        private $dataReceb;
        private $dataEncam;
        private $obs;
        private $valor;


    public function __construct($idReg,$nProcesso,$uniGestora,$nAta,$tipoObjeto,$tipoAta,$itens,$dataReceb,$dataEncam,$obs,$valor) {

        $this->idReg = $idReg;   
        $this->Processo = $nProcesso;
        $this->uniGestora = $uniGestora;
        $this->nAta = $nAta;
        $this->tipoObjeto = $tipoObjeto;
        $this->tipoAta = $tipoAta;
        $this->itens = $itens;
        $this->dataReceb = $dataReceb;
        $this->dataEncam = $dataEncam;
        $this->obs = $obs;
        $this->valor = $valor;

    }

    public function set_idReg($idReg) {
        $this->idReg = $idReg;
      }
    public function get_idReg() {
        return $this->idReg;
      }
      
    public function set_nProcessoe($nProcesso) {
        $this->nProcesso = $nProcesso;
      }
    public function get_nProcesso() {
        return $this->nProcesso;
      }

    public function set_uniGestora($uniGestora) {
        $this->uniGestora = $uniGestora;
      }
    public function get_uniGestora() {
        return $this->uniGestora;
      }

    public function set_nAta($nAta) {
        $this->nAta = $nAta;
      }
    public function get_nAta() {
        return $this->nAta;
      }

    public function set_tipoObjeto($tipoObjeto) {
        $this->tipoObjeto = $tipoObjeto;
      }
    public function get_tipoObjeto() {
        return $this->idtipoObjeto;
      }

    public function set_tipoAta($tipoAta) {
        $this->tipoAta = $tipoAta;
      }
    public function get_tipoAta() {
        return $this->tipoAta;
      }

    public function set_itens($itens) {
        $this->itens = $itens;
      }
    public function get_itens() {
        return $this->itens;
      }

    public function set_dataReceb($dataReceb) {
        $this->dataReceb = $dataReceb;
      }
    public function get_dataReceb() {
        return $this->dataReceb;
      }

    public function set_dataEncam($dataEncam) {
        $this->dataEncam = $dataEncam;
      }
    public function get_dataEncam() {
        return $this->dataEncam;
      }

    public function set_obs($obs) {
        $this->obs = $obs;
      }
    public function get_obs() {
        return $this->obs;
      }

    public function set_valor($valor) {
        $this->valor = $valor;
      }
    public function get_valor() {
        return $this->valor;
      }

    


} 





