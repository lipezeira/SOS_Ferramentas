<?php

use SosFerramentas\Core\Router;

Router::get('/','HomeController','index');
Router::get('/login','LoginController','login');
Router::get('/teste','LoginController','teste');

/*Router::add('/teste','HomeController','teste');
Router::add('/teste2','HomeController','teste2');
Router::add('/teste3','HomeController','teste3');
Router::add('/teste4','HomeController','teste4');
Router::add('/teste5','HomeController','teste5');
Router::add('/teste6','HomeController','teste6');*/

Router::post('/criarconta','LoginController','criarconta');
Router::get('/produto','ProdutoController','produto');
Router::get('/servico','ServicoController','servico');
Router::get('/carrinho','CarrinhoController','carrinho');
Router::post('/cadastrarconta','CarrinhoController','cadastrarconta');
Router::get('/alugar','AlugarController','alugar');
Router::post('/cadastrarconta','LoginController','cadastrarconta');
