<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146081541-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-146081541-1');
        </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="author" content="MARIVALDO TORRES JUNIOR">
    <meta name="description" content="Blog da Documentando">
    <meta name="keywords" content="advocacia, direito, advogado, oab, advogada, direitocivil, advogados, direitodotrabalho, dicas, lei, processos, documentando, linte,sotfware juridico, automação de documentos, startup automação, automatização, documentanto ">
    <meta property=”og:image” content=”/img/compartilha.png” />
    <meta property=”fb:app_id” content=”87741124305″ />
 </head>


    <title>Documentando</title>
</head>
<body>
        <header class="menu-principal">
                <main>
                    <div class="header-1">
                        <a href="http://documentando.com.br/"><div class="logo">
                                <img src="./img/doc.png" alt="Documentando Icon" height="67" width="160"></a>
                        
                        
                    </div></a>
                  
                        
                </main>
            </header>

            <main class="col-sm-12 menu-urls">
                    <div class="header2">
                        <div class="menu">
                            <ul>
                                    <li><a href="http://documentando.com.br/">HOME</a></li>
                                    <li><a href="http://soartigos.documentando.com.br">ARTIGOS</a></li>
                                    <li><a href="http://artigos.documentando.com.br">EBOOKS</a></li>
                                    <li><a href="http://cadastro.documentando.com.br">CADASTRE-SE</a></li>
                      
                </main>
            <section class="wrapper text-dark" id="our-blog">
                <div class="d-flex-c container">
                    <div class="my-2">
                    <h1 style="color: red">CADASTRE-SE</h1>
                    <br>
                    <p>O Blog da Documentando te ensina a otimizar os processos de organização compartilhamento<br> e proteção dos documentos da sua empresa. Cadastre-se e seja o 1° a aplicar as melhores <br>
                        práticas:</p>
                </div>
                    <div class="container">
                        <div class="row">
                            <div><div class="col-sm-8">
                                    <div class="form-1 cadastro">
                                            <h3  class="text-justify " style="color: transparent ">Não perca nenhuma novidade!Cadastre-se para receber <br></h3>
                                                <form method="POST" action="proc_cad_usuario.php">
                                                        <div class="form-group">
                                                          <label for="exampleInputEmail1" style="color: white"><b>Endereço de E-mail</b></label>
                                                          <input width="600px" type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                                                          <br>
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="exampleInputName" style="color: white"><b>Nome Completo</b></label>
                                                          <input type="text" name="nome" class="form-control" id="exampleInputPassword1" placeholder="Nome Completo">
                                                        </div>
                                                        <fieldset>
                                                            <legend style="color: white"> Pessoa jurídica ou pessoa física?</legend>
                                                            <br>
                                                             <div >
                                                                <input type="radio" name="tipo" value="b2b"><Label style="color: white">PJ (B2B)</Label><br><br>
                                                            </div>
                                                
                                                            <div>
                                                                <input type="radio" name="tipo" value="b2c"><Label style="color: white">PF (B2C)</Label><br><br>
                                                            </div>
                                                        </fieldset>
                    
                                                        <button type="submit" value="Cadastrar" class=" btn-danger btn-lg btn-block"><b>RECEBER CONTEÚDO EXCLUSIVO</b></button>
                                                      </form>
                                                      <?php
                                                            if(isset($_SESSION['msg'])){
                                                            echo $_SESSION['msg'];
                                                            unset($_SESSION['msg']);
                                                            }
                                                       ?>
                                            </div>
                                        </div>
                            </div></div>
                        </div>
                    










                <footer class="footer" style="background-color: rgba(214, 212, 212, 0.863)">
                        <div class="container ">
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <div class="footer-logo"> 
    
                                        <a href="#"><img src="./img/doc.png" height="67px" width="160px" ></a></div>
                                        <div class="copy-right">
                                                <p>
                                                
                                                    &copy;<b>Documentando</b>
                                                </p>
                                                
                                            </div>
                                        <div class="copy-right"></div>
                                    <div class="social-icon">
                                            <a href="https://www.facebook.com/documentando.blog/"><img src="./img/face.png" height="30px" width="30px" /></a>
                                            <a href="https://www.linkedin.com/in/documentando/"><img src="./img/in.png" height="30px" width="30px"/></a>
                                            <a href="https://twitter.com/Documentando_b"><img src="./img/tw.png"height="30px" width="30px"/></a>
                                                    
                                            <a href="https://www.instagram.com/documentando.blog/"><img src="./img/ins.png" height="30px" width="30px"/></a>
                                            
                                            
                                    </div>
                                   
                                    
                                </div>
                            </div>
                        </div>
                    </footer>
              
    </body>
    </html>