<?php

namespace SosFerramentas\Controllers;

use SosFerramentas\Core\Controller;

class ErroController extends Controller{

    public function erro404(){
        $this->view('404');
    }
}