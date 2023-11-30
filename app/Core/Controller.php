<?php

namespace SosFerramentas\Core;

class Controller{
    
    protected function view(string $arquivo,array $dados=[]){
        extract($dados);
        require PASTA_VIEW."{$arquivo}.view.php";
    }
}