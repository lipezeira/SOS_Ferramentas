<?php

namespace SosFerramentas\Core;

class Router{

    protected static $rotas = [];

     public static function add(string $rota, string $controller,string $acao)
     {
        static::$rotas[$rota] = [$controller,$acao];
     }

     public static function exec(string $url){

        $url = "/".$url;
        $rotas = static::$rotas;
        if( array_key_exists($url,$rotas)){
            [$controller,$metodo] = $rotas[$url];
            static::carregarController($controller,$metodo);
        }else{
            static::erro('404');
        }
        
     }
 
    protected static function carregarController($controller,$metodo){

        $controller = NS_CONTROLLERS . $controller;
        $ctr = new $controller;
        $ctr->$metodo();
    }

    protected static function erro(string $tipo){
        $controller = NS_CONTROLLERS. 'ErroController';
        $ctr = new $controller();
        $ctr->erro($tipo);

    }
}