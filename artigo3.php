
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
    <meta name="description" content="Site do Documentando">
    <meta name="keywords" content="advocacia, direito, advogado, oab, advogada, direitocivil, advogados, direitodotrabalho, dicas, lei, processos, documentando, linte,sotfware juridico, automação de documentos, startup automação, automatização, documentanto ">
 </head>


    <title>Documentando</title>
</head>
<body>
        <header class="menu-principal">
                <main>
                    <div class="header-1">
                        <div class="logo">
                                <a href="http://documentando.com.br/"><img src="./img/doc.png" alt="Documentando Icon" height="67" width="160"></a>
                        
                        
                    </div>
                  
                        <div class="menu-principal2">
                        <main class="col-sm-12 menu1-urls">
                            <div class="header1">
                                <div class="menu1">
                                    <ul> 
                                            <li><a href="http://documentando.com.br/">HOME</a></li>
                                            <li><a href="#">CADASTRE-SE</a></li>
                                            <!--<li><a href="">PRODUTO</a></li>
                                            <li><a href="">SOBRE</a></li>-->
                                        </ul>
                                    </div>
                    </div>
                </main>
            </div>
            </header>
            <main class="col-sm-12 menu-urls">
                    <div class="header2">
                        <div class="menu">
                            <ul>
                                <li><a href="http://artigos.documentando.com.br">EBOOKS</a></li>
                                <li><a href="http://soartigos.documentando.com.br">ARTIGOS</a></li>
                                <li><a href="http://podcast.documentando.com.br">PODCAST</a></li>
                                <li><a href="http://videos.documentando.com.br">VÍDEOS</a></li>
                        </div>
                        <div class="busca">
                            <input placeholder="Busca" type="text"/>
                        </div>
                    </div>
                </main>
            <br><br><br><br><br>
            <section class="wrapper text-dark" id="our-blog">
                <div class="d-flex-c container">
                    <div class="">
                    <h1 class="text-center " style="color: black "><B>AS TOP 3 FERRAMENTAS INOVADORAS PARA DEIXAR SEU TRABALHO ÁGIL</B></h1>
                    <div class="nomezinhos">
                        <div class="tipo-doc"><h5> ARTIGO|</h5></div>
                        <div class="author"><h6>Por Pamela Coelho</h6></div>
                      </div> 
                      <div class="col-sm-12">
                <div class="my-2 text-justify font-x1" ><p>
                    <br>
                    A maioria das dificuldades dos advogados quando se fala em inovação é não se verem como empreendedores. Hoje em dia, todo grande profissional precisa ter uma postura empreendedora diante dos desafios do mercado competitivo e aprender a lidar com os problemas de forma preditiva e rápida. Diante desse cenário, as ferramentas criadas para empreendedores são as mais indicadas para facilitar o dia a dia de quem já tem muita burocracia pra enfrentar.
                    As ferramentas além de facilitarem o processo de tomada de decisão, elas:
<br><br>
                    <li class="my-2 font-x1"> Evidência e diminui os gargalos das empresas;</li>
                    <li class="my-2 font-x1"> Foca numa estratégia eficiente para a empresa;</li>
            <li class="my-2 font-x1"> Diminui o custo dos processos administrativos;</li>
<li class="my-2 font-x1"> Melhora a comunicação com cliente.</li>
<br>
<p class="my-2 text-center font-x1">Além de todas essas vantagens, as ferramentas que vamos trazer são gratuitas. Incrível, né?</p>
                </div>
                <br>
                <br>
</div>
                <div>
                        <div class="col-sm-8">
                                <div class="form-1">
                                    <h3  class="pb-3 text-center" style="color: white">Não perca nenhum conteúdo e seja o 1° a aplicar as <b>melhores práticas</b>. <br>Cadastre-se seu E-mail para receber todos os nossos conteúdos <b> EXCLUSIVOS !</b> :</h3>
                                    
                                    <form method="POST" action="proc_cad_usuario.php">
                                            <div class="form-group">
                                              <label for="exampleInputEmail1" style="color: white"><b>Endereço de E-mail</b></label>
                                              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                                              <br>
                                            </div>
                                            <div class="form-group">
                                              <label for="exampleInputName" style="color: white"><b>Nome Completo</b></label>
                                              <input type="text" name="nome" class="form-control" id="exampleInputPassword1" placeholder="Nome Completo">
                                            </div>
                                            <fieldset>
                                                <legend style="color: white">Seu E-mail é de pessoa jurídica ou pessoa física?</legend>
                                                <br>
                                                 <div>
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
                </div>
                <br>
                <br>

                <div>
                        <div class="col-sm-12">
                <h2 class="my-2 text-center  " style="color:#2A4C72"><B>1. TRELLO</B></h2>
                <br>
                <img class="art-1" src="./img/trello.png"  class="trello">
                <br><br>
                <p class="my-2 text-justify font-x1">É um software para gerenciar aplicativos feito por Fog Creek em 2011. Funciona na versão gratuita e também na versão paga com alguns recursos mais avançados. O sistema utilizado é baseado no Kanban, conhecido e difundido pela Toyota. Os projetos são representados por quadros (boards), que contêm listas de tarefas. As tarefas são representadas por cartões que são criados dentro dos quadros. Cartões podem ser movidos de uma lista para outra para representar o progresso da tarefa sendo que os usuários podem ser inscritos nos cartões.</p>
                <br>
                <p class="my-2 text-justify font-x1" >A grande vantagem do Trello é poder organizar e priorizar projetos de um jeito divertido, flexível e gratificante.

                        Além disso, existe a vantagem de poder ser adaptável tanto para trabalho, projeto lateral ou férias da família.
                        </p>
                
                    <p class="my-2 text-center font-x1">Você pode organizar suas tarefas em três grupos:</p>
                    <li class="my-2 font-x1">“a fazer”;</li>
                    <li class="my-2 font-x1">“fazendo”;</li>
                    <li class="my-2 font-x1">“feito”.</li>
                    <br>

                   <h5> <p class="my-2 text-center font-x1" >No rodapé de cada tarefa é indicado o responsável.</p></h5>
                   <p class="text-justify" >Todos os integrantes tem acesso e podem editar ao que está acontecendo no projeto aumentando a produtividade, gerando colaboração e facilitando o fluxo do processo do projeto.
                       <br>
                        <h2 class="my-2 text-center " style="color:#2A4C72"><B>2. SLACK</B></h2>
                            <br>
                            <img class="art-1" src="./img/slack.png"  class="slack">
                <br><br>
                <p class="my-2 text-justify font-x1">O Slack é um conjunto americano de ferramentas de software de colaboração em equipe e serviços online baseados em nuvem, desenvolvido pela Slack Technologies.</p>
                <br>
                <p class="my-2 text-justify font-x1" >Combina a comunicação e a colaboração em equipe em um só lugar. Com isso, é possível aumentar a produtividade no trabalho, tanto em grandes empresas como em pequenos negócios. Nele você conclui sua lista de tarefas pendentes e faz com que os projetos avancem, unindo as pessoas, as conversas, as ferramentas e as informações de que você precisa. 
                        </p>
                        <p class="my-2 text-justify font-x1" >O Slack está disponível em todos os dispositivos. Portanto, é possível encontrar e acessar sua equipe e seu trabalho, tanto no escritório como fora dele 
                            </p>
                            <p class="my-2 text-center font-x1" >Listei as seguintes vantagens do slack:</p>
                            <li class="my-2 font-x1">Comunicar com a equipe e organizar conversas por assunto, projeto ou qualquer outro tema importante para o trabalho.</li>
                            <li class="my-2 font-x1">Enviar mensagens ou fazer chamadas para qualquer pessoa do grupo ou da equipe.</li>
                            <li class="my-2 font-x1">Compartilhar e editar documentos e colaborar com as pessoas certas, tudo diretamente no Slack.</li>
                            <li class="my-2 font-x1">Integrar no fluxo de trabalho as ferramentas e os serviços que você já usa, como o Google Drive, o Salesforce, o Dropbox, o Asana, o Twitter, o Zendesk, e muito mais.</li>
                            <li class="my-2 font-x1">Realizar pesquisas de maneira simples em uma base de conhecimento que indexa e arquiva automaticamente as conversas e os arquivos da equipe.</li>
                            <li class="my-2 font-x1">Personalizar as notificações de modo a se concentrar no que realmente importa.</li>
                            <p class="my-2 text-justify font-x1">Nele, você pode conversar com uma pessoa específica, com um grupo do escritório ou com todo o escritório.</p>

                            <h2 class="my-2 text-center" style="color:#2A4C72"><B>3. GOOGLEDRIVE</B></h2>
                            <br>
                            <img class="art-1" src="./img/google.png"  class="slack">
                               

                <br><br>
                <p class="my-2 text-justify font-x1" >O Googledrive é o sistema de armazenamento da Google feito de forma sincronizada. Baseia-se no conceito de computação em nuvem que permite compartilhar documentos e arquivos sem precisar ficar enviando e-mails a toda equipe.
                </p>
                <p>Para isso, basta criar e salvar o documento no Google Drive e compartilhar com qualquer pessoa que você queira dar acesso a essa pasta.</p>
                <p>A grande é vantagem é permitir que a pessoa edite o mesmo documento simultaneamente e compartilhe de novo na mesma pasta.</p>
                <br>
                
                        <h2 class=" my-2 text-center font-x1" style="color:#2A4C72"><B>CONCLUSÃO</B></h2>
                            <br> <br>

                            <p class="my-2 text-justify font-x1" > O intuito desse artigo não é esgotar as fontes de ferramentas inovadoras e sim mostrar algumas opções disponíveis no mercado que possa se adpatar ao seu negócio.</p>

                            <P class="my-2 text-justify font-x1">Você deve testar com todo o seu time as inovações que surgirem no mercado e concluírem se elas se adpatam aos desafios e rotina enfrentada por toda equipe.</P>
                            <P class="my-2 text-justify font-x1"> O que realmente vale para tornar o seu trabalho ágil é fazer com que todos tenham a mente aberta para tudo que possa agilizar e tornar mais eficiente o processo.</P>
                            <br><br><br>
                        <p><strong>Gostaram do artigo? Querem mais novidades sobre o tema? <b >Cadastre-se</b> no nosso site e receba todas as novidades sobre as ferramentas mais modernas para tornar o seu trabalho cada vez mais ágil.</strong></p>

                
                </div>
                </div>
