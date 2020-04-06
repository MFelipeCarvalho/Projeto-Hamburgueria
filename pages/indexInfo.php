<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Honker Burger</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/reset.css">
        <link rel="icon" href="../imagens/favicon.ico"/>
        <script src="../js/jquery.js"></script>
        <script src="../js/ancora.js"></script>
    </head> 
    
    <body>
    
        
        <!-- Área do cabeçalho -->
        
        <div class="divCabecalho">
            <div class="divConteudoCabecalho">
                <div class="divLogo">
                    <figure>
                        <a href="../index.php">
                        <img class="logoImagem" src="../imagens/logo.png" alt="Logo imagem">
                        </a>
                    </figure>   
                </div>
                
                <!-- Área do menu -->
                
                <div class="divBoxBotoesMenu" >
                    
                    <div class="divBotaoMenu">
                        <p class="pMenuItemCabecalho"><a href="indexProdutosDoMes.php">Mês</a></p>
                    </div>
                    
                    <div class="divBotaoMenu">
                        <p class="pMenuItemCabecalho"><a href="indexCuriosidades.php">Sabia?</a></p>
                    </div>
                    
                    <div class="divBotaoMenu">
                        <p class="pMenuItemCabecalho"><a href="indexLojas.php">Lojas</a></p>
                    </div>
                    
                    <div class="divBotaoMenu">
                        <p class="pMenuItemCabecalho"><a href="indexPromocoes.php">Desconto</a></p>
                    </div>
                    
                    <div class="divBotaoMenu">
                        <p class="pMenuItemCabecalho"><a href="indexContato.php">Contato</a></p>
                    </div>
                    
                    <div class="divBotaoMenu">
                        <p class="pMenuItemCabecalho"><a href="indexInfo.php">Sobre</a></p>
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
        
        <!-- Área das informações -->
        
        <div class="divBoxFullInfo">
            <div class="divBoxInfo">
                <div class="divBoxInfoSobre">
                    <img class="imgBackInfo" src="../imagens/imgInfoSobre.jpg" alt="Imagem Modelo">
                </div>
                <div class="divBoxInfoSobre">
                    <p class="pInfoTextFundacao"> Localizada na Av. Luis Carlos Berrini, nº 666. Itaim Bibi, São Paulo-SP; e fundada em 2015, a Honker Burger é uma hamburgueria pioneira em hambúrgueres artesanais. Com todas as receitas feitas pelo chefe Franchesco Pavanelli, nossos lanhes prezam a rusticidade da culinária.</p>
                </div>
                <div class="divBoxInfoSobre">
                    <img class="artesanalImg" src="../imagens/dijon.jpeg" alt="Imagem Modelo">
                </div>
                <div class="divBoxInfoSobre">
                    <img class="chefImg" src="../imagens/cozinheiro.jpg" alt="Chefe">
                </div>
                <div class="divBoxInfoSobre">
                    <p class="infoCozinheiro">Natural de Turim, Itália; o chefe Franchesco Pavanelli é formado em gastronomia pela Scuola di lingua italiana "Scuola Leonardo da Vinci". Pós formado, veio ao Brasil com intuito de trazer a culinária que aprendeu. Ele, em parceria com o atual diretor Thomas Müller, fundaram a Honker Burguer.</p>
                </div>
                <div class="divBoxInfoSobre"> 
                    <img class="hamburgueriaModelo" src="../imagens/hamburgueria.jpg" alt="Hamburgueria">
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
                        <img class="imgLogoPlaystore" src="../imagens/logoPlayStore.png" alt="Play Store logo">
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
