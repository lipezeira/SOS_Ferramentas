<?php

namespace SosFerramentas\Controllers;

use SosFerramentas\Core\Controller;
use SosFerramentas\Models\Usuarios;

class HomeController extends Controller{

    public function index(){
        $dados = ['titulo' => 'Página inicial - SOS Ferramentas'];
        $this->view('inicial', $dados);
    }

    public function teste(){
        $usuario = new Usuarios();
        $usuario->inserir(["Pedro@ifba.edu.br","Pedro003"]);
    }
}
