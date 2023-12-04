<?php

namespace SosFerramentas\Models\DAO;
use SosFerramentas\Core\Database;
use SosFerramentas\Core\DAO;
use SosFerramentas\Core\Entity;
use SosFerramentas\Models\Entities\Usuario;

class UsuariosDAO extends DAO{

    protected static string $tabela = "usuario";
    protected static string $classe = Usuario::class;
    
}