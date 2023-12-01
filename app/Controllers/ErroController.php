<?php

namespace SosFerramentas\Controllers;

use SosFerramentas\Core\Controller;

class ErroController extends Controller{

    public function erro($tipo){
        switch($tipo){
            case "404":
                $this->view('404');
            break;
        }




        
    }
}