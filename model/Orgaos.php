<?php

Class Orgaos {

        private $idOrg;
        private $sigla;
        private $descricao;
       
        
    function __contructor($idOrg,$sigla,$descricao) {

        $this->idOrg = $idOrg;
        $this->sigla = $sigla;
        $this->descricao = $descricao;
    }
   
    public function set_idOrg($idOrg) {
        $this->idOrg = $idOrg;
      }
    public function get_idOrg() {
        return $this->idOrg;
      }
    
    public function set_sigla($sigla) {
        $this->sigla = $sigla;
      }
    public function get_sigla() {
        return $this->sigla;
      }

    public function set_descricao($descricao) {
        $this->descricao = $descricao;
      }
    public function get_descricao() {
        return $this->descricao;
      }

     
    
  }

?>