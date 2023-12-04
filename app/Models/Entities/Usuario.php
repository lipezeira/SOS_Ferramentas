<?php

namespace SosFerramentas\Models\Entities;
use SosFerramentas\Core\Entity;

class Usuario extends Entity{
    protected ?String $email;
    protected ?String $senha;

    public function setSenha($valor){
        $this->senha = password_hash($valor,PASSWORD_DEFAULT);
    }
}