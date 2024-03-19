<?php 

Class Solicitacao {

        private int $idSol;    
        private string $nProcesso;
        private string $uniGestora;
        private int $nAta;
        private string $tipoObjeto;
        private string $tipoAta;
        private array $itens;
        private string $dataReceb;
        private string $dataEncam;
        private string $obs;
        private float $valor;


    public function __construct(int $idSol, string $nProcesso, string $uniGestora, int $nAta, string $tipoObjeto, string $tipoAta, array $itens, string $dataReceb, string $dataEncam, string $obs, float $valor) {

        $this->idReg = $idSol;   
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

    public function set_idReg(int $idSol) {
        $this->idReg = $idSol;
      }
    public function get_idReg() {
        return $this->idReg;
      }
      
    public function set_nProcessoe(string $nProcesso) {
        $this->nProcesso = $nProcesso;
      }
    public function get_nProcesso() {
        return $this->nProcesso;
      }

    public function set_uniGestora(string $uniGestora) {
        $this->uniGestora = $uniGestora;
      }
    public function get_uniGestora() {
        return $this->uniGestora;
      }

    public function set_nAta(int $nAta) {
        $this->nAta = $nAta;
      }
    public function get_nAta() {
        return $this->nAta;
      }

    public function set_tipoObjeto(string $tipoObjeto) {
        $this->tipoObjeto = $tipoObjeto;
      }
    public function get_tipoObjeto() {
        return $this->idtipoObjeto;
      }

    public function set_tipoAta(string $tipoAta) {
        $this->tipoAta = $tipoAta;
      }
    public function get_tipoAta() {
        return $this->tipoAta;
      }

    public function set_itens(array $itens) {
        $this->itens = $itens;
      }
    public function get_itens() {
        return $this->itens;
      }

    public function set_dataReceb(string $dataReceb) {
        $this->dataReceb = $dataReceb;
      }
    public function get_dataReceb() {
        return $this->dataReceb;
      }

    public function set_dataEncam(string $dataEncam) {
        $this->dataEncam = $dataEncam;
      }
    public function get_dataEncam() {
        return $this->dataEncam;
      }

    public function set_obs(string $obs) {
        $this->obs = $obs;
      }
    public function get_obs() {
        return $this->obs;
      }

    public function set_valor(float $valor) {
        $this->valor = $valor;
      }
    public function get_valor() {
        return $this->valor;
      }

    


} 





