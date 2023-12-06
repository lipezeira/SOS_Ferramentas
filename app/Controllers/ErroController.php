<?php

namespace SosFerramentas\Controllers;

use SosFerramentas\Core\Controller;

class ErroController extends Controller{

    public function erro($tipo){
        switch($tipo){
            case "404":
                $this->view('404');
            break;
            case "controller":
                $this->view('erro', ['msg' => 'Controller Não Existe']);
            break;
            case "metodo":
                $this->view('erro', ['msg' => 'O Metodo não existe no Controlador']);
            break;   
            case "naopermitido":
                $this->view('erro', ['msg' => 'A rota não existe para este método!']);
            break;   
        }




        
    }
}