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
        
        <!-- Área dos Contatos -->
            
        <div class="divBoxFullContatos">
            <div class="divBoxContatos">
                <div class="divBoxEntreEmContato">
                    <p class="pEntreEmContato">Entre em contato</p>
                </div>
                    
                <div class="divBoxTextAreaContatos">
                    <form>
                    
                    
                    
                    
                    <div class="divBoxPrimeiraLinha">
                        <div class="divBoxContatoNome">
                            <p class="itemContatoNome">Nome: </p> 
                        </div>
                        <div class="divBoxTextAreaNome">
                            <textarea class="textAreaNome"></textarea>       
                        </div>
                        <div class="divBoxContatoTelefone">
                            <p class="itemContatoTelefone">Telefone: </p>
                        </div>
                        <div class="divBoxTextAreaTelefone">
                            <textarea class="textAreaTelefone"></textarea>
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="divBoxSegundaLinha">    
                        <div class="divBoxContatoCelular">
                            <p class="itemContatoCelular">Celular: </p>
                        </div>
                        <div class="divBoxTextAreaCelular">
                            <textarea class="textAreaCelular"></textarea>
                        </div>
                        <div class="divBoxContatoEmail">
                            <p class="itemContatoEmail">E-mail: </p> 
                        </div>
                        <div class="divBoxTextAreaEmail">
                            <textarea class="textAreaEmail"></textarea>       
                        </div>
                    </div>
                    
                    
                    
                    
                    <div class="divBoxTerceiraLinha">
                        <div class="divBoxContatoPaginaPessoal">
                            <p class="itemContatoPaginaPessoal">Página Pessoal: </p>
                        </div>
                        <div class="divBoxTextAreaPaginaPessoal">
                            <textarea class="textAreaPaginaPessoal"></textarea>
                        </div>
                        <div class="divBoxContatoFacebook">
                            <p class="itemContatoFacebook">Facebook: </p> 
                        </div>  
                        <div class="divBoxTextAreaFacebook">
                            <textarea class="textAreaFacebook"></textarea>       
                        </div>
                    </div>
                        
                        
                        
                        
                    <div class="divBoxQuartaLinha">
                        <div class="divBoxContatoSugestoesOuCriticas">
                            <p class="itemContatoSugestoesOuCriticas">Sugestões/Críticas: </p>
                        </div>
                        <div class="divBoxTextAreaSugestoesOuCriticas">
                            <textarea class="textAreaSugestoesOuCriticas"></textarea>
                        </div>
                        <div class="divBoxContatoMensagem">
                            <p class="itemContatoMensagem">Mensagem: </p>
                        </div>
                        <div class="divBoxTextAreaMensagem">
                            <textarea class="textAreaMensagem"></textarea>
                        </div>
                    </div>
                        
                        
                    
                        
                    <div class="divBoxQuintaLinha">
                        <div class="divBoxContatoSexo">
                            <p class="itemContatoSexo">Sexo: </p>
                        </div>
                        <div class="divBoxInputOpcoesSexo">
                            Feminino <input type="radio" name="opcaoSexo" value="Femino">
                            Masculino <input type="radio" name="opcaoSexo" value="Masculino">
                        </div>
                        <div class="divBoxProfissao">
                            <p class="itemContatoProfissao">Profissão: </p>
                        </div>
                        <div class="divBoxTextAreaProfissao">
                            <textarea class="textAreaProfissao"></textarea>
                        </div>
                        <div class="divBoxContatoBotaoEnviar">
                            <input class="botaoEnviar" type="button" name="contatoBotaoEnviar" value="Enviar">
                        </div>
                    </div>          
                    
                        
                    </form>       
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
