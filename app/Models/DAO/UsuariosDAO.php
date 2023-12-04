<?php

namespace SosFerramentas\Models\DAO;
use SosFerramentas\Core\Database;
use SosFerramentas\Core\DAO;
use SosFerramentas\Models\Entities\Usuario;

class UsuariosDAO extends DAO{

    protected static string $tabela = "usuario";
    protected static string $classe = Usuario::class;

    public static function  inserir($usuario){
        $db = new Database();
        $tabela = static::$tabela;
        $sql= "INSERT INTO {$tabela} (email,senha) VALUES (?,?)";

        $dados = [ 
            $usuario->email,
            $usuario->senha
        ];
        
        return $db->execute($sql, $dados);
    }

    
    public static function editar($usuario){
        $db = new Database;
        $tabela = static::$tabela;
        $sql= "UPDATE {$tabela} SET email = ?, senha = ? WHERE idUsuario = ?"; 
        $dados = [
            $usuario-> email,
            $usuario-> senha,
            $usuario-> idUsuario
        ];

        return $db->execute($sql,$dados);
    }
   
    
}