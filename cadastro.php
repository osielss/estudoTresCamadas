<?php
class cadastro {
    public $login;
    public $senha;

    public function cadastrar() {
        $objeto = new SalaDAO();
        $objeto->set("login", $this->login);
        $objeto->set("senha", $this->senha);
        return $objeto->cadastrar();
    }

    public function set($prop, $value) {
        $this->$prop = $value;
    }
}
?>