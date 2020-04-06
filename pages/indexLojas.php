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
          
        <!-- Área das Lojas -->
          
        <div class="divBoxFullLojas">
            <div class="divBoxLojas">
                <div class="divBoxNossasLojas">
                    <p class="pNossasLojas">Nossas Lojas</p>
                </div>
                
                <div class="divBoxLojasItem">
                    <div class="divBoxLocaLojas">
                        <p class="pTitleLocalLojas">Barueri</p>
                    </div>
                    <div class="divBoxImgLocalHamburgueria">
                        <img class="imgLocal" src="../imagens/hamburgueriaB.jpg" alt="Honker Burguer Barueri">
                    </div>
                    <p class="pLojaEndereco">Av. Alameda Mamoré, 190. Alphaville, Barueri-SP</p>
                    <p class="pTelefoneLojas">(11) 4890-6873</p>
                </div>
                
                <div class="divBoxLojasItem">
                    <div class="divBoxLocaLojas">
                        <p class="pTitleLocalLojas">Campinas</p>
                    </div>
                    <div class="divBoxImgLocalHamburgueria">
                        <img class="imgLocal" src="../imagens/hamburgueriaC.jpg" alt="Honker Burguer Campinas">
                    </div>
                    <p class="pLojaEndereco">Rua Olávo Bilac, nº 737. Cambuí, Campinas-SP</p>
                    <p class="pTelefoneLojas">(11) 4890-6873</p>
                </div>
                
                <div class="divBoxLojasItem">
                    <div class="divBoxLocaLojas">
                        <p class="pTitleLocalLojas">São Paulo</p>
                    </div>
                    <div class="divBoxImgLocalHamburgueria">
                        <img class="imgLocal" src="../imagens/hamburgueriaSP.jpg" alt="Honker Burguer São Paulo">
                    </div>
                    <p class="pLojaEndereco">Av. Luis Carlos Berrini, nº 666. Itaim Bibi, São Paulo-SP</p>
                    <p class="pTelefoneLojas">(11) 4800-6843</p>
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
