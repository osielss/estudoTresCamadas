<?php

class cadastroDAO {
    public $login;
    public $senha;

    public function cadastrar() {
        $objeto = new Conexao();
        $SQL = "INSERT INTO cadastro (login, senha)
                VALUES ($this->login, '$this->senha');";
        $objeto->set("sql", $SQL);
        $objeto->query();
        return "Cadastrado com Sucesso";
    }
}
?>