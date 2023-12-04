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
        
        var_dump($db->execute($sql, $dados));
    }
}