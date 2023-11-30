<?php

namespace SosFerramentas\Controllers;

use SosFerramentas\Core\Controller;

class LoginController extends Controller{

    public function login(){
        $this->view('login',['pagina'=>'Página de login']);
    }

    public function criarconta(){
        $this->view('conta');
    }
}
