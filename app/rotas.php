<?php

use SosFerramentas\Core\Router;

Router::add('/','HomeController','index');
Router::add('/login','LoginController','login');

Router::add('/teste','HomeController','teste');

Router::add('/cadastro','LoginController','criarconta');
Router::add('/produto','ProdutoController','produto');
Router::add('/servico','ServicoController','servico');
Router::add('/carrinho','CarrinhoController','carrinho');

