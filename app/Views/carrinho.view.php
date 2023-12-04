<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?=css('carrinho')?>">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>S.O.S Ferramentas</title>
    </head>

    <body>
        <header class="menu">
            <nav>
                <!-- conteudo da navegaçaõ -->
                <ul type="none">

                    <div class="logo">
                        <div class="img"><img src="<?=img('logo')?>"></div>
                        <div class="h1">
                            <h1>SOS</h1>
                            <h1>Ferramentas</h1>
                        </div>
                    </div>

                    <div class="links_menu">
                        <div class="usuario">
                            <div><img src="<?=img('User')?>" class="img_menu"></div>
                            <div class="info_menu">
                                <h4>Felipe</h4>
                            </div>
                            <div class="info_menu">
                                <h4>felipeMecanico@gmail.com</h4>
                            </div>
                        </div>
                        <div class="link_menu">
                            <img src="<?=img('a')?>" class="img_link">
                            <li>
                                <a href="<?=linkrota('')?>">Home</a>
                            </li>
                        </div>
                        <div class="link_menu">
                            <img src="<?=img('b')?>" class="img_link">
                            <li>
                                <a href="<?=linkrota('produto')?>">Produtos</a>
                            </li>
                        </div>
                        <div class="link_menu">
                            <img src="<?=img('c')?>" class="img_link">
                            <li>
                                <a href="<?=linkrota('servico')?>">Serviços</a>
                            </li>
                        </div>
                        <div class="link_menu">
                            <img src="<?=img('d')?>" class="img_link">
                            <li>
                                <a href="<?=linkrota('login')?>">Login</a>
                            </li>
                        </div>
                        <div class="link_menu">
                            <img src="<?=img('e')?>" class="img_link">
                            <li>
                                <a href="<?=linkrota('carrinho')?>">Carrinho</a>
                            </li>
                        </div>
                        <div class="create">
                            <a href="<?=linkrota('create')?>">Create</a>
                        </div>
                    </div>

                </ul>
            </nav>
        </header>
        <main>

            <header>
                <input type="text" placeholder="Pesquise por produtos, serviços e locais" class="barra_de_pesquisa"></input>
            <button class="new_product">New Product</button>
        </header>
        <section>
            <div class="caixa">
                <div class="carrinhoBox">
                    <div class="caixa2">
                        <img src="<?=img('martelo')?>" alt="imagem do produto" class="imgPro">
                        <div class="box5">
                            <h4 class="nomeDoProduto">Nome Do Produto</h4>
                            <h4 class="categoria">Categoria</h4>
                        </div>
                    </div>
                    <div class="vq">
                        <span style="color:white;">R$
                        </span>
                        <h5 class="valor">7.80</h5>
                        <button id="decrease">-</button>
                        <input type="number" id="numberInput" class="quantidade" min="1" value="1" disabled>
                        <button id="increase">+</button>
                    </div>
                    <div class="verifica">
                        <a href="<?=linkrota('alugar')?>" class="confirmar">
                            <i class='bx bx-check-circle'></i>
                        </a>
                        <button class="deletar">
                            <i class='bx bx-x-circle'></i>
                        </button>
                        <!-- <img src="" alt="confirmar" class="confirmar">
                                                <img src="" alt="deletar" class="deletar">-->

                    </div>
                </div>
                
                <div class="carrinhoBox">
                    <div class="caixa2">
                        <img src="<?=img('martelo')?>" alt="imagem do produto" class="imgPro">
                        <div class="box5">
                            <h4 class="nomeDoProduto">Nome Do Produto</h4>
                            <h4 class="categoria">Categoria</h4>
                        </div>
                    </div>
                    <div class="vq">
                        <span style="color:white;">R$
                        </span>
                        <h5 class="valor">7.80</h5>
                        <button id="decrease">-</button>
                        <input type="number" id="numberInput" class="quantidade" min="1" value="1" disabled>
                        <button id="increase">+</button>
                    </div>
                    <div class="verifica">
                        <a href="<?=linkrota('alugar')?>" class="confirmar">
                                <i class='bx bx-check-circle'></i>
                        </a>
                        <button class="deletar">
                            <i class='bx bx-x-circle'></i>
                        </button>
                        <!-- <img src="" alt="confirmar" class="confirmar">
                                                <img src="" alt="deletar" class="deletar">-->

                    </div>
                </div>
                <div class="carrinhoBox">
                    <div class="caixa2">
                        <img src="<?=img('motoserra')?>" alt="imagem do produto" class="imgPro">
                        <div class="box5">
                            <h4 class="nomeDoProduto">Nome Do Produto</h4>
                            <h4 class="categoria">Categoria</h4>
                        </div>
                    </div>
                    <div class="vq">
                        <span style="color:white;">R$
                        </span>
                        <h5 class="valor">7.80</h5>
                        <button id="decrease">-</button>
                        <input type="number" id="numberInput" class="quantidade" min="1" value="1" disabled>
                        <button id="increase">+</button>
                    </div>
                    <div class="verifica">
                    <a href="<?=linkrota('alugar')?>" class="confirmar">
                            <i class='bx bx-check-circle'></i>
</a>
                        <button class="deletar">
                            <i class='bx bx-x-circle'></i>
                        </button>
                        <!-- <img src="" alt="confirmar" class="confirmar">
                                                <img src="" alt="deletar" class="deletar">-->

                    </div>
                </div>
                <div class="carrinhoBox">
                    <div class="caixa2">
                        <img src="<?=img('machado')?>" alt="imagem do produto" class="imgPro">
                        <div class="box5">
                            <h4 class="nomeDoProduto">Nome Do Produto</h4>
                            <h4 class="categoria">Categoria</h4>
                        </div>
                    </div>
                    <div class="vq">
                        <span style="color:white;">R$
                        </span>
                        <h5 class="valor">7.80</h5>
                        <button id="decrease">-</button>
                        <input type="number" id="numberInput" class="quantidade" min="1" value="1" disabled>
                        <button id="increase">+</button>
                    </div>
                    <div class="verifica">
                    <a href="<?=linkrota('alugar')?>" class="confirmar">
                            <i class='bx bx-check-circle'></i>
</a>
                        <button class="deletar">
                            <i class='bx bx-x-circle'></i>
                        </button>
                        <!-- <img src="" alt="confirmar" class="confirmar">
                                                <img src="" alt="deletar" class="deletar">-->

                    </div>
                </div>
                <div class="carrinhoBox">
                    <div class="caixa2">
                        <img src="<?=img('motoserra')?>" alt="imagem do produto" class="imgPro">
                        <div class="box5">
                            <h4 class="nomeDoProduto">Nome Do Produto</h4>
                            <h4 class="categoria">Categoria</h4>
                        </div>
                    </div>
                    <div class="vq">
                        <span style="color:white;">R$
                        </span>
                        <h5 class="valor">7.80</h5>
                        <button id="decrease">-</button>
                        <input type="number" id="numberInput" class="quantidade" min="1" value="1" disabled>
                        <button id="increase">+</button>
                    </div>
                    <div class="verifica">
                    <a href="<?=linkrota('alugar')?>" class="confirmar">
                            <i class='bx bx-check-circle'></i>
</a>
                        <button class="deletar">
                            <i class='bx bx-x-circle'></i>
                        </button>
                        <!-- <img src="" alt="confirmar" class="confirmar">
                                                <img src="" alt="deletar" class="deletar">-->

                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="confirmarBox">
                <div>
                    <h4 class="resumocompra">Resumo Da Compra</h4>
                    <h6 class="subtotal">Sub Total: R$ 17</h6>
                    <h4 class="frete">Frete: Gratuito</h4>
                    <h4 class="total">Total: R$17</h4>
                </div>
                <button class="contratarbtn">Contratar</button>
            </div>
        </section>
        <div class="menumobile">
            <div class="link_menu"><a href="index.html"><img src="<?=img('a')?>" class="img_link"></a></div>
            <div class="link_menu"><a href="produtos.html"><img src="<?=img('b')?>" class="img_link"></a></div>
            <div class="link_menu"><a href="Servicos.html"><img src="<?=img('c')?>" class="img_link"></a></div>
            <div class="link_menu"><a href="login.html"><img src="<?=img('d')?>" class="img_link"></a></div>
            <div class="link_menu"><a href="carrinho.html"><img src="<?=img('e')?>" class="img_link"></a></div>
        </div>
    </body>
</html></div></main></body><script src="script/car.js"></script></html>
