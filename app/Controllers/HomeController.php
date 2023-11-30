<?php

namespace SosFerramentas\Controllers;

use SosFerramentas\Core\Controller;

class HomeController extends Controller{

    public function index(){
        $dados = ['titulo' => 'Página inicial - SOS Ferramentas'];
        $this->view('inicial', $dados);
    }
}
