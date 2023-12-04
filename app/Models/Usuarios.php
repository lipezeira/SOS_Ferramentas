<?php

namespace SosFerramentas\Models;
use SosFerramentas\Core\Database;

class Usuarios {

    public function inserir($usuario){

        $db = new Database();
        $sql= "INSERT INTO usuario (email,senha) VALUES (?,?)";

        

        var_dump($db->execute($sql,$usuario));
    }
}