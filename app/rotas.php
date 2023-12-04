<?php

use SosFerramentas\Core\Router;

Router::add('/','HomeController','index');
Router::add('/login','LoginController','login');
<<<<<<< HEAD
Router::add('/teste','LoginController','teste');
=======

Router::add('/teste','HomeController','teste');
Router::add('/teste2','HomeController','teste2');
Router::add('/teste3','HomeController','teste3');
Router::add('/teste4','HomeController','teste4');
Router::add('/teste5','HomeController','teste5');
Router::add('/teste6','HomeController','teste6');

>>>>>>> 4bdcf288685c4d196950b40cf6c83eb15f5ec92a
Router::add('/cadastro','LoginController','criarconta');
Router::add('/produto','ProdutoController','produto');
Router::add('/servico','ServicoController','servico');
Router::add('/carrinho','CarrinhoController','carrinho');
Router::add('/alugar','AlugarController','alugar');