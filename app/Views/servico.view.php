<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=css('Servicos')?>">
    <title>S.O.S Ferramentas</title>
</head>
<body>
    <header class="menu">
    	<nav>
            <!-- conteudo da navegaçaõ -->
            <ul type="none">

                <div class="logo">
                    <div class="img"><img src = "<?=img('logo')?>"></div>
                    <div class="h1">
                        <h1>SOS</h1>
                        <h1>Ferramentas</h1>
                    </div>
                </div>

                <div class="links_menu">
                    <div class="usuario">
                        <div><img src = "<?=img('User')?>" class="img_menu"></div>
                        <div class="info_menu"><h4>Felipe</h4></div>
                        <div class="info_menu"><h4>felipeMecanico@gmail.com</h4></div>
                    </div>
                        <div class="link_menu"> <img src="<?=img('a')?>" class="img_link"> <li><a href="<?=linkrota('')?>">Home</a></li> </div>
                        <div class="link_menu"> <img src="<?=img('b')?>" class="img_link"> <li><a href="<?=linkrota('produto')?>">Produtos</a></li> </div>
                        <div class="link_menu"> <img src="<?=img('c')?>" class="img_link"> <li><a href="<?=linkrota('servico')?>">Serviços</a></li> </div>
                        <div class="link_menu"> <img src="<?=img('d')?>" class="img_link"> <li><a href="<?=linkrota('login')?>">Login</a></li> </div>
                        <div class="link_menu"> <img src="<?=img('e')?>" class="img_link"> <li><a href="<?=linkrota('carrinho')?>">Carrinho</a></li> </div>
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
            <p class="voce_pode_se_interessar">Serviços de qualidade:</p>
            <div class="fotos">
                <div class="card">
                    <img src="imagenservico/carpinteiro.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço de carpintaria</h5>
                        <h6 class="valorDoProduto">R$ 150,00 a diária</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/informatica.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço de informática</h5>
                        <h6 class="valorDoProduto">R$ 80,00 a diária</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/jardineiro.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço de Jardinagem</h5>
                        <h6 class="valorDoProduto">R$ 80,00 a diária</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/mecanico.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço Mecânico</h5>
                        <h6 class="valorDoProduto">Valor a combinar</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/pedreiro.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço de Pedreiro</h5>
                        <h6 class="valorDoProduto">R$ 120,00 a diária</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/soldador.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço de Soldador</h5>
                        <h6 class="valorDoProduto">R$ 100,00 a diária</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/carpinteiro.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço de Carpintaria</h5>
                        <h6 class="valorDoProduto">R$ 120,00 a diária</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/informatica.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço de Informática</h5>
                        <h6 class="valorDoProduto">R$ 70,00 a diária</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/jardineiro.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço de Jardinagem</h5>
                        <h6 class="valorDoProduto">R$ 80,00 a diária</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/mecanico.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço Mecânico</h5>
                        <h6 class="valorDoProduto">Valor a combinar</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/pedreiro.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço de Pedreiro</h5>
                        <h6 class="valorDoProduto">R$ 120,00 a diária</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/soldador.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço de Soldador</h5>
                        <h6 class="valorDoProduto">R$ 100,00 a diária</h6>
                    </div>
                </div>
            </div>
            
            <br>
            <br>
            <br>
            <!-- 4 x espaço-->
            <div class="fotos">
                <div class="card">
                    <img src="imagenservico/carpinteiro.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço de carpintaria</h5>
                        <h6 class="valorDoProduto">R$ 150,00 a diária</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/informatica.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço de informática</h5>
                        <h6 class="valorDoProduto">R$ 80,00 a diária</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/jardineiro.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço de Jardinagem</h5>
                        <h6 class="valorDoProduto">R$ 80,00 a diária</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/mecanico.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço Mecânico</h5>
                        <h6 class="valorDoProduto">Valor a combinar</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/pedreiro.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço de Pedreiro</h5>
                        <h6 class="valorDoProduto">R$ 120,00 a diária</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/soldador.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço de Soldador</h5>
                        <h6 class="valorDoProduto">R$ 100,00 a diária</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/carpinteiro.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço de Carpintaria</h5>
                        <h6 class="valorDoProduto">R$ 120,00 a diária</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/informatica.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço de Informática</h5>
                        <h6 class="valorDoProduto">R$ 70,00 a diária</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/jardineiro.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço de Jardinagem</h5>
                        <h6 class="valorDoProduto">R$ 80,00 a diária</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/mecanico.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço Mecânico</h5>
                        <h6 class="valorDoProduto">Valor a combinar</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/pedreiro.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço de Pedreiro</h5>
                        <h6 class="valorDoProduto">R$ 120,00 a diária</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/soldador.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço de Soldador</h5>
                        <h6 class="valorDoProduto">R$ 100,00 a diária</h6>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <!-- 4 x espaço-->
            <div class="fotos">
                <div class="card">
                    <img src="imagenservico/carpinteiro.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço de carpintaria</h5>
                        <h6 class="valorDoProduto">R$ 150,00 a diária</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/informatica.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço de informática</h5>
                        <h6 class="valorDoProduto">R$ 80,00 a diária</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/jardineiro.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço de Jardinagem</h5>
                        <h6 class="valorDoProduto">R$ 80,00 a diária</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/mecanico.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço Mecânico</h5>
                        <h6 class="valorDoProduto">Valor a combinar</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/pedreiro.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço de Pedreiro</h5>
                        <h6 class="valorDoProduto">R$ 120,00 a diária</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/soldador.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço de Soldador</h5>
                        <h6 class="valorDoProduto">R$ 100,00 a diária</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/carpinteiro.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço de Carpintaria</h5>
                        <h6 class="valorDoProduto">R$ 120,00 a diária</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/informatica.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço de Informática</h5>
                        <h6 class="valorDoProduto">R$ 70,00 a diária</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/jardineiro.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço de Jardinagem</h5>
                        <h6 class="valorDoProduto">R$ 80,00 a diária</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/mecanico.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço Mecânico</h5>
                        <h6 class="valorDoProduto">Valor a combinar</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/pedreiro.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço de Pedreiro</h5>
                        <h6 class="valorDoProduto">R$ 120,00 a diária</h6>
                    </div>
                </div>
                <div class="card">
                    <img src="imagenservico/soldador.png" class="foto_img">
                    <div>
                        <h5 class="nomeDoProduto">Serviço de Soldador</h5>
                        <h6 class="valorDoProduto">R$ 100,00 a diária</h6>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="menumobile">
        <div class="link_menu"><a href="index.html"><img src="<?=img('a')?>" class="img_link"></a></div>
        <div class="link_menu"><a href="produtos.html"><img src="<?=img('b')?>" class="img_link"></a></div>
        <div class="link_menu"><a href="Servicos.html"><img src="<?=img('c')?>" class="img_link"></a></div>
        <div class="link_menu"><a href="login.html"><img src="<?=img('d')?>" class="img_link"></a></div>
        <div class="link_menu"><a href="carrinho.html"><img src="<?=img('e')?>" class="img_link"></a></div>
    </div>
</body>
<script src="script/script.js"></script>
</html>
