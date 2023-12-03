<?php

namespace SosFerramentas\Controllers;

use SosFerramentas\Core\Controller;

class CarrinhoController extends Controller{

    public function carrinho(){
        $this->view('carrinho');
    }
}
