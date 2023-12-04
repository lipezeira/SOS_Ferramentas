<?php

namespace SosFerramentas\Core;
use SosFerramentas\Core\Database;
use SosFerramentas\Core\DAO;
use SosFerramentas\Models\Entities\Usuario;

abstract class DAO{
    protected static string $tabela = "";
    protected static string $classe = \stdClass::class;

    public static function  inserir(Entity $entidade){
        $db = new Database();
        $tabela = static::$tabela;
        $sql= "INSERT INTO {$tabela}";

        $campos=[];
        $coringas=[];
        $dados=[];
        $propriedades = $entidade->getProps();
        
        foreach($propriedades as $propriedade => $valor){
            if( !is_null($entidade->$propriedade) ){
                array_push($campos,$propriedade);
                array_push($dados,$valor);
                array_push($coringas,'?');
            }
        }
        $campos = implode(',',$campos);
        $coringas = implode(',',$coringas);
        $sql.= " ({$campos}) VALUES ({$coringas})";

        return $db->execute($sql, $dados);
    }
    #nao está funcionando
    public static function editar(Entity $entidade){
        $db = new Database;
        $tabela = static::$tabela;
        $sql = "UPDATE {$tabela} SET";
        $propriedades = $entidade->getProps();
        $dados = [];
        $campos = "";

        foreach($propriedades as $propriedade => $valor){
            if($propriedade != 'idUsuario' && !is_null($entidade->$propriedade)){
                $campos .= " {$propriedade} = ?,";
                array_push($dados,$valor);
            }
        }
        $campos = rtrim($campos,',');
        $sql .= "{$campos} WHERE idUsuario = ?";
        array_push($dados,$entidade->idUsuario);

        return $db->execute($sql,$dados);
    }

    
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

    public static function excluir(Entity $entidade){
        $db = new Database;
        $tabela = static:: $tabela;
        $sql = "DELETE FROM {$tabela} Where idUsuario = ?";
        return $db->execute($sql,[$entidade->idUsuario]);
    }

}