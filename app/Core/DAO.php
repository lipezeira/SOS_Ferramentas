<?php

namespace SosFerramentas\Core;

abstract class DAO{
    protected static string $tabela = "";
    protected static string $classe = \stdClass::class;

    public abstract static function inserir($entidade);
    public abstract static function editar($entidade);
    
    public static function getAll(){
        $db = new Database;
        $tabela = static:: $tabela;
        $sql = "SELECT * FROM {$tabela}";
        $db->execute($sql);
        return $db->getALL(static:: $classe);
    }

    public static function getById($id){ 
        $db = new DataBase;
        $tabela = static:: $tabela;
        $sql = "SELECT * FROM {$tabela} WHERE idUsuario= ?";
        $db->execute($sql,[$id]);
    
        return $db->get(static:: $classe);
    }

    public static function excluir($entidade){
        $db = new Database;
        $tabela = static:: $tabela;
        $sql = "DELETE FROM {$tabela} Where idUsuario = ?";
        return $db->execute($sql,[$entidade->idUsuario]);
    }

}