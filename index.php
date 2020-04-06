<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Honker Burger</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="icon" href="imagens/favicon.ico"/>
        <script src="js/jquery.js"></script>
        <script src="js/ancora.js"></script>
        <script type="text/javascript" src="js/jquery-1-8-3-min.js"></script>
        <script type="text/javascript" src="js/jquery-cycle-all.js"></script>
        <script src="js/slide.js">
        </script>
    </head> 
    
    <body>
    
        
        <!-- Área do cabeçalho -->
        
        <div class="divCabecalho">
            <div class="divConteudoCabecalho">
                <div class="divLogo">
                    <figure>
                        <a href="index.php">
                        <img class="logoImagem" src="imagens/logo.png" alt="Logo imagem">
                        </a>
                    </figure>   
                </div>
                
                <!-- Área do menu -->
                
                <div class="divBoxBotoesMenu" >
                    
                    <div class="divBotaoMenu">
                        <p class="pMenuItemCabecalho"><a href="pages/indexProdutosDoMes.php">Mês</a></p>
                    </div>
                    
                    <div class="divBotaoMenu">
                        <p class="pMenuItemCabecalho"><a href="pages/indexCuriosidades.php">Sabia?</a></p>
                    </div>
                    
                    <div class="divBotaoMenu">
                        <p class="pMenuItemCabecalho"><a href="pages/indexLojas.php">Lojas</a></p>
                    </div>
                     
                    <div class="divBotaoMenu">
                        <p class="pMenuItemCabecalho"><a href="pages/indexPromocoes.php">Promoção</a></p>
                    </div>
                    
                    <div class="divBotaoMenu">
                        <p class="pMenuItemCabecalho"><a href="pages/indexContato.php">Contato</a></p>
                    </div>
                    
                    <div class="divBotaoMenu">
                        <p class="pMenuItemCabecalho"><a href="pages/indexInfo.php">Sobre</a></p>
                    </div>
                        
                    </div>
                
                <!-- Área do login -->
                
                <div class="divBoxLogin">
                
                    <form>
                        
                        <input class="formLoginESenha" type="text" name="usuario" value="Usuário">
                        
                        <input class="formLoginESenha" type="text" name="senha" value="Senha">
                    
                        <input class="botaoLogin" type="button" name="botaoLogin" value="Login">
                        
                    </form>
                    
                </div>
     
            </div>
        </div>
        
        <!-- Área do menu de exibição -->   
        
        <div class="divBoxExibicaoFull">
            <div class="divBoxExibicao">
                <div class="divBoxAnterior">
                    <p id="prev" class="buttons"><a href="#">&laquo;</a></p>
                </div>
                
                    <div class="divBoxImagemSlide">
                        <ul>
                            <li><img class="imagemSlide" src="imagensSlide/imagem1.jpg" alt="Catálogo Exibição"></li>
                            <li><img class="imagemSlide" src="imagensSlide/imagem2.jpg" alt="Catálogo Exibição"></li>
                            <li><img class="imagemSlide" src="imagensSlide/imagem3.jpg" alt="Catálogo Exibição"></li>
                            <li><img class="imagemSlide" src="imagensSlide/imagem4.jpg" alt="Catálogo Exibição"></li>
                            <li><img class="imagemSlide" src="imagensSlide/imagem5.jpg" alt="Catálogo Exibição"></li>
                            <li><img class="imagemSlide" src="imagensSlide/imagem6.jpg" alt="Catálogo Exibição"></li>
                        </ul>
                    </div>
                
                <div class="divBoxProximo" >
                    <p id="next" class="buttons"><a href="#">&raquo;</a></p>
                </div>
            </div>
        </div>    
        
        <!-- Área dos itens -->
        
        <div class="divBoxFullItens">
            <div class="divBox1340RedesSociais">
                <div class="divBoxAlignCenterItens">
                <div class="divBoxMenuItens">
                    <div class="divBoxMenuItensLista">
                        <p class="pItemMenuLista">ITEM 1</p>
                    </div>
                    <div class="divBoxMenuItensLista">
                        <p class="pItemMenuLista">ITEM 2</p>
                    </div>
                    <div class="divBoxMenuItensLista">
                        <p class="pItemMenuLista">ITEM 3</p>
                    </div>
                    <div class="divBoxMenuItensLista">
                        <p class="pItemMenuLista">ITEM 4</p>
                    </div>
                    <div class="divBoxMenuItensLista">
                        <p class="pItemMenuLista">ITEM 5</p>
                    </div>
                    <div class="divBoxMenuItensLista">
                        <p class="pItemMenuLista">ITEM 6</p>
                    </div>
                    <div class="divBoxMenuItensLista">
                        <p class="pItemMenuLista">ITEM 7</p>
                    </div>
                    <div class="divBoxMenuItensLista">
                        <p class="pItemMenuLista">ITEM 8</p>
                    </div>
                    <div class="divBoxMenuItensLista">
                        <p class="pItemMenuLista">ITEM 9</p>
                    </div>
                    
                </div>
                <div class="divBoxItens">
                    <div class="divItens">
                        <div class="divBoxImgItemHome">
                            <img  class="imgModeloHome" src="imagens/imgModeloHome.jfif" alt="Imagem Catálogo">
                        </div>
                        <div class="divBoxNomeDescricaoPreco">
                            <p class="pNomeDescricaoPreco">Honker Mega Picanha</p>
                        </div>
                        <div class="divBoxNomeDescricaoPreco">
                            <p class="pNomeDescricaoPreco">R$ 28,90</p>
                        </div>
                        <div class="divBoxNomeDescricaoPreco">
                            <p class="pNomeDescricaoPreco">Descrição</p>
                        </div>
                        <p class="detalhes">Detalhes</p>
                    </div>
                        
                    <div class="divItens">
                        <div class="divBoxImgItemHome">
                             <img  class="imgModeloHome" src="imagens/imgModeloHome.jfif" alt="Imagem Catálogo">
                        </div>
                        <div class="divBoxNomeDescricaoPreco">
                            <p class="pNomeDescricaoPreco">Honker Mega Picanha</p>
                        </div>
                        <div class="divBoxNomeDescricaoPreco">
                            <p class="pNomeDescricaoPreco">R$ 28,90</p>
                        </div>
                        <div class="divBoxNomeDescricaoPreco">
                            <p class="pNomeDescricaoPreco">Descrição</p>
                        </div>
                        <p class="detalhes">Detalhes</p>
                    </div>
                        
                    <div class="divItens">
                        <div class="divBoxImgItemHome">
                             <img  class="imgModeloHome" src="imagens/imgModeloHome.jfif" alt="Imagem Catálogo">
                        </div>
                        <div class="divBoxNomeDescricaoPreco">
                            <p class="pNomeDescricaoPreco">Honker Mega Picanha</p>
                        </div>
                        <div class="divBoxNomeDescricaoPreco">
                            <p class="pNomeDescricaoPreco">R$ 28,90</p>
                        </div>
                        <div class="divBoxNomeDescricaoPreco">
                            <p class="pNomeDescricaoPreco">Descrição</p>
                        </div>
                        <p class="detalhes">Detalhes</p>
                    </div>
                        
                    <div class="divItens">
                        <div class="divBoxImgItemHome">
                             <img  class="imgModeloHome" src="imagens/imgModeloHome.jfif" alt="Imagem Catálogo">
                        </div>
                        <div class="divBoxNomeDescricaoPreco">
                            <p class="pNomeDescricaoPreco">Honker Mega Picanha</p>
                        </div>
                        <div class="divBoxNomeDescricaoPreco">
                            <p class="pNomeDescricaoPreco">R$ 28,90</p>
                        </div>
                        <div class="divBoxNomeDescricaoPreco">
                            <p class="pNomeDescricaoPreco">Descrição</p>
                        </div>
                        <p class="detalhes">Detalhes</p>
                    </div>      
                        
                    <div class="divItens">
                        <div class="divBoxImgItemHome">
                             <img  class="imgModeloHome" src="imagens/imgModeloHome.jfif" alt="Imagem Catálogo">
                        </div>
                        <div class="divBoxNomeDescricaoPreco">
                            <p class="pNomeDescricaoPreco">Honker Mega Picanha</p>
                        </div>
                        <div class="divBoxNomeDescricaoPreco">
                            <p class="pNomeDescricaoPreco">R$ 28,90</p>
                        </div>
                        <div class="divBoxNomeDescricaoPreco">
                            <p class="pNomeDescricaoPreco">Descrição</p>
                        </div>
                        <p class="detalhes">Detalhes</p>
                    </div>
                        
                    <div class="divItens">
                        <div class="divBoxImgItemHome">
                             <img  class="imgModeloHome" src="imagens/imgModeloHome.jfif" alt="Imagem Catálogo">
                        </div>
                        <div class="divBoxNomeDescricaoPreco">
                            <p class="pNomeDescricaoPreco">Honker Mega Picanha</p>
                        </div>
                        <div class="divBoxNomeDescricaoPreco">
                            <p class="pNomeDescricaoPreco">R$ 28,90</p>
                        </div>
                        <div class="divBoxNomeDescricaoPreco">
                            <p class="pNomeDescricaoPreco">Descrição</p>
                        </div>
                        <p class="detalhes">Detalhes</p>
                    </div> 
                </div>        
            </div>
                
                <div class="divBoxFullRedesSocias">
                        <div class="divBoxRedesSociais">
                            <a target="_blank" href="https://www.facebook.com/">
                            <img class="imagemLogo" src="imagens/facebook.png" alt="Facebook logo">
                            </a>
                        </div>
                        <div class="divBoxRedesSociais">
                            <a target="_blank" href="https://twitter.com/twitter">
                            <img class="imagemLogo" src="imagens/twitter.png" alt="Twitter logo">
                            </a>
                        </div>
                        <div class="divBoxRedesSociais">
                            <a target="_blank" href="https://www.instagram.com/?hl=pt-br">
                            <img class="imagemLogo" src="imagens/instagram.png" alt="Instagram Logo">
                            </a>
                        </div>
                    </div>
                
            </div> 
        </div>
        
        <!-- Área do rodapé -->
        
        <div class="divBoxFullRodape">
            <div class="divBoxRodape">  
                <div class="divBoxSistemaInterno">
                    <form>
                        <input class="botaoSistemaInternoCSS" type="button" name="botaoSistemaDownload" value="Sistema Interno">
                    </form> 
                </div>
                <div class="divBoxEndereco">
                    <p class="endereco">Av. Luis Carlos Berrini, nº 666. Itaim Bibi, São Paulo-SP</p>
                </div>
                <div class="divBoxDownload">
                    <div class="boxIconePlayStore">
                        <img class="imgLogoPlaystore" src="imagens/logoPlayStore.png" alt="Play Store logo">
                    </div>
                    <div class="divBoxBotaoDowload"> 
                        <form>
                            <input class="botaoDownload" type="button" name="botaoDownload" value="Baixe o App">
                        </form>                        
                    </div>
                </div>  
            </div>
        </div>
        
    </body>
    
</html>
