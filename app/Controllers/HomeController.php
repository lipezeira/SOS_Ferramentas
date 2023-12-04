<?php

namespace SosFerramentas\Controllers;

use SosFerramentas\Core\Controller;
use SosFerramentas\Models\DAO\UsuariosDAO;
use SosFerramentas\Models\Entities\Usuario;

class HomeController extends Controller{

    public function index(){
        $dados = ['titulo' => 'Página inicial - SOS Ferramentas'];
        $this->view('inicial', $dados);
    }

    public function teste(){
        $usuario = new Usuario;
        $usuario->email = "Luan@ifba.edu.br";
        $usuario->senha =  "Luan000";

        $DAO = new UsuariosDAO();
        $DAO->inserir( $usuario );
    }
}
