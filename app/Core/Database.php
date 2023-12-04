<?php

namespace SosFerramentas\Core;

class Database{
    protected \PDO $conexao;
    protected \PDOStatement $stmt;

    public function __construct(){
        $servidor = DB['servidor'];
        $banco = DB['banco'];
        $usuario = DB['usuario'];
        $senha = DB['senha'];

        #String de conexão
        $dsn = "mysql:host={$servidor};dbname={$banco}";

        $this->conexao = new \PDO($dsn,$usuario,$senha);

        //var_dump($this->conexao);
    }
     
    public function execute(string $sql, array $dados = [] ):bool {
        $this->stmt = $this->conexao->prepare($sql);
        return $this->stmt->execute($dados);
    }
    public function getALL(string $classe):array {
        return $this->stmt->fetchAll(\PDO::FETCH_CLASS,$classe);

    }
    public function get(string $classe){
        return $this->stmt->fetchObject($classe);

    }
}