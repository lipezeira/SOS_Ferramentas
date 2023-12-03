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
                        <div class="link_menu"> <img src="<?php echo img('a')?>" class="img_link"> <li><a href="index.html">Home</a></li> </div>
                        <div class="link_menu"> <img src="<?php echo img('b')?>" class="img_link"> <li><a href="produtos.html">Produtos</a></li> </div>
                        <div class="link_menu"> <img src="<?php echo img('c')?>" class="img_link"> <li><a href="Servicos.html">Serviços</a></li> </div>
                        <div class="link_menu"> <img src="<?php echo img('d')?>" class="img_link"> <li><a href="login.html">Login</a></li> </div>
                        <div class="link_menu"> <img src="<?php echo img('e')?>" class="img_link"> <li><a href="carrinho.html">Carrinho</a></li> </div>
                        
                        
                        <div><a href="" class="create">Create</a></div>
                </div>

            </ul>
        </nav>
    </header>
    <main>
        
        <section>
            <header>
                <input type="text" placeholder="Pesquise por produtos, serviços e locais" class="barra_de_pesquisa"></input>
                <button class="new_product">New Product</button>
            </header>
            <div class="slide_box">
                <div class="slide">
                    <img src="<?php echo img('pagina1')?>" alt="" class="slide_img">
                    <img src="<?php echo img('pagina2')?>" alt="" class="slide_img">
                    <img src="<?php echo img('pagina3')?>" alt="" class="slide_img">
                    <img src="<?php echo img('pagina4')?>" alt="" class="slide_img">
                </div>
            </div>
            <div class="conjunto_de_navegacao">
                <div class="box_nav"><a href="#" class="btn_nav"><img src="<?php echo img('1')?>" class="btn_img"></a><span>Construção</span></div>
                <div class="box_nav"><a href="#" class="btn_nav"><img src="<?php echo img('2')?>" class="btn_img"></a><span>Jardinagem</span></div>
                <div class="box_nav"><a href="#" class="btn_nav"><img src="<?php echo img('3')?>" class="btn_img"></a><span>Informática</span></div>
                <div class="box_nav"><a href="#" class="btn_nav"><img src="<?php echo img('4')?>" class="btn_img"></a><span>Reparos</span></div>
                <div class="box_nav"><a href="#" class="btn_nav"><img src="<?php echo img('5')?>" class="btn_img"></a><span>Oficinas</span></div>
                <div class="box_nav"><a href="#" class="btn_nav"><img src="<?php echo img('6')?>" class="btn_img"></a><span>Geral</span></div>
            </div>
            <p class="voce_pode_se_interessar">Você pode se interessar:</p>
            <div class="fotos">
                <div class="card">
                    <img src="<?php echo img('motoserra')?>" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">motoserra</h5>
                        <h6 class="valorDoProduto">R$ 4.90</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo img('phillips')?>" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">phillips</h5>
                        <h6 class="valorDoProduto">R$ 1.09</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo img('motoserra')?>" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">motoserra</h5>
                        <h6 class="valorDoProduto">R$ 4.90</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo img('martelo')?>" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">martelo</h5>
                        <h6 class="valorDoProduto">R$ 13.09</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo img('motoserra')?>" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">motoserra</h5>
                        <h6 class="valorDoProduto">R$ 4.90</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo img('martelo')?>" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">martelo</h5>
                        <h6 class="valorDoProduto">R$ 13.09</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo img('motoserra')?>" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">motoserra</h5>
                        <h6 class="valorDoProduto">R$ 4.90</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo img('machado')?>" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">machado</h5>
                        <h6 class="valorDoProduto">R$ 3.09</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo img('motoserra')?>" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">motoserra</h5>
                        <h6 class="valorDoProduto">R$ 4.90</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo img('machado')?>" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">machado</h5>
                        <h6 class="valorDoProduto">R$ 13.09</h6>
                    </div>
                </div>
            </div>
            
            <br>
            <br>
            <br>
            <br>
            <br>
            <!-- 4 x espaço-->
            <div class="fotos">
            <div class="card">
                    <img src="<?php echo img('motoserra')?>" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">motoserra</h5>
                        <h6 class="valorDoProduto">R$ 4.90</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo img('machado')?>" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">machado</h5>
                        <h6 class="valorDoProduto">R$ 1.09</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo img('motoserra')?>" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">motoserra</h5>
                        <h6 class="valorDoProduto">R$ 4.90</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo img('phillips')?>" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">phillips</h5>
                        <h6 class="valorDoProduto">R$ 1.09</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo img('machado')?>" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">machado</h5>
                        <h6 class="valorDoProduto">R$ 2.09</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo img('motoserra')?>" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">motoserra</h5>
                        <h6 class="valorDoProduto">R$ 4.90</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo img('phillips')?>" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">phillips</h5>
                        <h6 class="valorDoProduto">R$ 1.09</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo img('martelo')?>" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">martelo</h5>
                        <h6 class="valorDoProduto">R$ 13.09</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo img('martelo')?>" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">martelo</h5>
                        <h6 class="valorDoProduto">R$ 13.09</h6>
                    </div>
                </div>
            <!-- 4 x espaço-->
            <div class="card">
                    <img src="<?php echo img('martelo')?>" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">martelo</h5>
                        <h6 class="valorDoProduto">R$ 13.09</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo img('motoserra')?>" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">motoserra</h5>
                        <h6 class="valorDoProduto">R$ 4.90</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo img('martelo')?>" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">martelo</h5>
                        <h6 class="valorDoProduto">R$ 13.09</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo img('motoserra')?>" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">motoserra</h5>
                        <h6 class="valorDoProduto">R$ 4.90</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo img('phillips')?>" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">phillips</h5>
                        <h6 class="valorDoProduto">R$ 0.90</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo img('martelo')?>" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">martelo</h5>
                        <h6 class="valorDoProduto">R$ 13.09</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo img('motoserra')?>" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">motoserra</h5>
                        <h6 class="valorDoProduto">R$ 4.90</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo img('martelo')?>" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">martelo</h5>
                        <h6 class="valorDoProduto">R$ 13.09</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo img('martelo')?>" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">martelo</h5>
                        <h6 class="valorDoProduto">R$ 13.09</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="<?php echo img('motoserra')?>" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">motoserra</h5>
                        <h6 class="valorDoProduto">R$ 4.90</h6>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="menumobile">
        <div class="link_menu"><a href="index.html"><img src="<?php echo img('a')?>" class="img_link"></a></div>
        <div class="link_menu"><a href="produtos.html"><img src="<?php echo img('b')?>" class="img_link"></a></div>
        <div class="link_menu"><a href="Servicos.html"><img src="<?php echo img('c')?>" class="img_link"></a></div>
        <div class="link_menu"><a href="login.html"><img src="<?php echo img('d')?>" class="img_link"></a></div>
        <div class="link_menu"><a href="carrinho.html"><img src="<?php echo img('e')?>" class="img_link"></a></div>
    </div>
</body>
<script src="http://localhost/SOS/SOS_Ferramentas/public/script/script.js"></script>
</html>