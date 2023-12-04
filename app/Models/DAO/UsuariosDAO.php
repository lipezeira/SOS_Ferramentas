<?php

namespace SosFerramentas\Models\DAO;
use SosFerramentas\Core\Database;
use SosFerramentas\Models\Entities\Usuario;

class UsuariosDAO{

    public function inserir(Usuario $usuario){

        $db = new Database();
        $sql= "INSERT INTO usuario (email,senha) VALUES (?,?)";

        $dados = [ 
            $usuario->email,
            $usuario->senha
        ];
        
        return $db->execute($sql, $dados);
    }

    public function getAll(){
        $db = new Database;
        $sql = "SELECT * FROM usuario";
        $db->execute($sql);
        return $db->getALL(Usuario::class);
    }

    public function getById($id){ 
        $db = new DataBase;
        $sql = "SELECT * FROM usuario WHERE idUsuario= ?";
        $db->execute($sql,[$id]);
    
        return $db->get(Usuario::class);
    }
    public function editar(Usuario $usuario){
        $db = new Database;
        $sql= "UPDATE usuario SET email = ?, senha = ? WHERE idUsuario = ?"; 
        $dados = [
            $usuario-> email,
            $usuario-> senha,
            $usuario-> idUsuario
        ];

        return $db->execute($sql,$dados);
    }
   
    public function excluir(Usuario $usuario){
        $db = new Database;
        $sql = "DELETE FROM usuario Where idUsuario = ?";
        return $db->execute($sql,[$usuario->idUsuario]);
    }
}