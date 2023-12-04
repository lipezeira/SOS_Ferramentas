<?php

namespace SosFerramentas\Core;

class Database{
    protected \PDO $conexao;
    protected \PDOStatement $stmt;

    public function __construct(){
        $servidor = "localhost";
        $banco = "sos_ferramentas";
        $usuario = "root";
        $senha = "";

        #String de conexão
        $dsn = "mysql:host={$servidor};dbname={$banco}";

        $this->conexao = new \PDO($dsn,$usuario,$senha);

        //var_dump($this->conexao);
    }
     
    public function execute(string $sql, array $dados = [] ):bool {
        $this->stmt = $this->conexao->prepare($sql);

        return $this->stmt->execute($dados);
    }


}