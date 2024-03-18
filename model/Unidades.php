<?php 

Class Unidades {

    private int $idUni;
    private string $siglaUni;
    private string $descricaoUni;
    

    public function set_idUni(int $idUni) {
        $this->idUni = $idUni;
      }
    public function get_idUni() {
        return $this->idUni;
      }

    function set_siglaUni(string $siglaUni) {
        $this->siglaUni = $siglaUni;
      }

    function get_siglaUni() {
        return $this->siglaUni;
      }

    public function set_descricaoUni(string $descricaoUni) {
        $this->descricaoUni = $descricaoUni;
      }

    public function get_descricaoUni() {
        return $this->descricaoUni;
      }



}



?>