<!DOCTYPE html>
    <html lang = "pt-br">
        <head>
            <title>Login SOS Ferramentas</title>
            <meta charset = "utf-8">
            <link href = "<?=css('login')?>" rel = "stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        </head>
        <body>
            
                <section class = "areaLogin" style ="background:black;">

                    <div class = "furadeira"><img src = "<?=img('Furadeira')?>">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    

                    <div class = "login">
                        <form method = "POST">
                            <div><img src = "<?=img('User')?>" class = "imgLogin"></div>
                           
                            <div class = "box-user">
                                <label>Nome de Usuário
                                <div class="login2">
                                <i class="fa-regular fa-user"></i>
                                <input type = "text" name = "nome" placeholder="Nome de Usuário" autofocus>
                                </div>
                                </label> 
                            </div>
                            
                            <div class = "box-user">
                                <label>Senha
                                <div class=" login2">
                                <i class="fa-solid fa-lock" style="color: #ffffff;"></i>
                                <input type = "password" name = "senha" placeholder="Sua senha">
                                </div>
                                </label>
                            </div>

                        <button type = "submit" value = "entrar"><a href = "index.html">Entrar</a></button>
                        </form>
                        
 
                    </div>
                </section>
                <div class="menumobile">
                <div class="link_menu"><a href="<?= linkrota('')?>"><img src="<?php echo img('a')?>" class="img_link"></a></div>
                <div class="link_menu"><a href="<?= linkrota('produto')?>""><img src="<?php echo img('b')?>" class="img_link"></a></div>
                <div class="link_menu"><a href="<?= linkrota('servico')?>"><img src="<?php echo img('c')?>" class="img_link"></a></div>
                <div class="link_menu"><a href="<?= linkrota('login')?>"><img src="<?php echo img('d')?>" class="img_link"></a></div>
                <div class="link_menu"><a href="<?= linkrota('carrinho')?>"><img src="<?php echo img('e')?>" class="img_link"></a></div>
            </div>
        </body>
        </html>