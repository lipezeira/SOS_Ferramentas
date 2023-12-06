<?php

namespace SosFerramentas\Controllers;

use SosFerramentas\Core\Controller;
use SosFerramentas\Models\DAO\UsuariosDAO;
use SosFerramentas\Models\Entities\Usuario;
use SosFerramentas\Core\DAO;

class HomeController extends Controller{

    public function index(){
        $dados = ['titulo' => 'Página inicial - SOS Ferramentas'];
        $this->view('inicial', $dados);
    }

    
}

