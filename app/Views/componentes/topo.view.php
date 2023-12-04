<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=css('style')?>">
    <title>S.O.S Ferramentas</title>
</head>
<body>
    <header class="menu">
    	<nav>
            <!-- conteudo da navegaçaõ -->
            <ul type="none">

                <div class="logo">
                    <div class="img"><img src = "<?php echo img('logo')?>"></div>
                    <div class="h1">
                        <h1>SOS</h1>
                        <h1>Ferramentas</h1>
                    </div>
                </div>

                <div class="links_menu">
                    <div class="usuario">
                        <div><img src = "<?php echo img('User')?>" class="img_menu"></div>
                        <div class="info_menu"><h4>Felipe</h4></div>
                        <div class="info_menu"><h4>felipeMecanico@gmail.com</h4></div>
                    </div>
                        <div class="link_menu"> <img src="<?php echo img('a')?>" class="img_link"> <li><a href="<?= linkrota('')?>">Home</a></li> </div>
                        <div class="link_menu"> <img src="<?php echo img('b')?>" class="img_link"> <li><a href="<?= linkrota('produto')?>">Produtos</a></li> </div>
                        <div class="link_menu"> <img src="<?php echo img('c')?>" class="img_link"> <li><a href="<?= linkrota('servico')?>">Serviços</a></li> </div>
                        <div class="link_menu"> <img src="<?php echo img('d')?>" class="img_link"> <li><a href="<?= linkrota('login')?>">Login</a></li> </div>
                        <div class="link_menu"> <img src="<?php echo img('e')?>" class="img_link"> <li><a href="<?= linkrota('carrinho')?>">Carrinho</a></li> </div>
                        
                        
                        <div><a href="" class="create">Create</a></div>
                </div>

            </ul>
        </nav>
    </header>