<?php

class Conexao {
    private $host = 'localhost:3306';
    private $user = 'root';
    private $pass = '';
    private $db = 'loginUsuario';
    private $sql;
    
    function Conexao(){       
    }
 
    function set($prop, $value) {
        $this->$prop = $value;
    }

    function query() {
        $con = new mysqli($this->host, $this->user, $this->pass, $this->db);
        if ($con->connect_errno) {
            echo "Falha ao conectar: (" . $con->connect_errno . ") " . $con->connect_error;
        }
        
        $qry = mysqli_query($con, $this->sql) or 
                die($this->erro(mysqli_error($con)));
        
        mysqli_close($con);
        
        return $qry;
    }

    function erro($erro) {
        echo $erro;
    }
}
