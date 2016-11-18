<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="pt-br">
    <!--<![endif]-->

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="Site de compatilhamento de calendarios" />
        <meta name="author" content="Pedro Paul" />
        <!--[if IE]>
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
        <title>CalendarWeb</title>
        <!--STYLE SHEETS REQUIRIDOS-->
        <!-- BOOTSTRAP CORE STYLE CSS -->
        <link href="css/bootstrap.css" rel="stylesheet" />
        <link href="css/font-awesome.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <!-- STYLE CSS CUSTOMIZADO -->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
        <link href='http://fonts.googleapis.com/css?family=Ruluko' rel='stylesheet' type='text/css' />
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="ico/calendar-icon-blue-18.png" />
        <link rel="stylesheet" type="text/css" id="SL_Style" href="css/translator.css" />
    </head>

    <body>
        <!-- Navegação -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">CalendarWeb</a>
                </div>
                <!-- Coleta os nav links para troca (toggling) -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- MEU CALENDÁRIO -->
                        <li><a href="calendario.php"><i class="fa fa-calendar"></i> MEU CALENDÁRIO</a>
                        </li>
                        <!-- LOGIN -->
                        <li><a href="login.php"><i class="fa fa-sign-in"></i> LOGIN</a>
                        </li>
                        <!-- CADASTRAR -->
                        <li><a href="cadastro.php"><i class="fa fa-user-plus"></i> CADASTRAR</a>
                        </li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->

<!--                <div id="navbar" class="navbar-collapse collapse">
                    <form class="navbar-form navbar-right" role="form">
                        <div class="form-group">
                            <input type="text" placeholder="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-large btn-primary"><i class="fa fa-sign-in"></i> LOGIN</button>
                    </form>
                </div>/.navbar-collapse -->

            </div>
            <!-- /.container -->
        </nav>
        <!-- Fim Navegação -->

        <!--Seção do Cabeçalho  -->
        <div class="container" id="home">
            <div class="row text-center">

                <div class="col-sm-4 head-main">

                    <a href="#about">
                        <i class="fa fa-info-circle color-blue "></i>
                    </a>
                    <h3> <a href="#about">SOBRE</a></h3>

                </div>

                <div class="col-sm-4 head-main">

                    <a href="#services">
                        <i class="fa fa-cubes color-blue"></i>
                    </a>
                    <h3>
                        <a href="#services">SERVIÇOS</a>
                    </h3>

                </div>

                <div class="col-sm-4 head-main">

                    <a href="#howuse">
                        <i class="fa fa-calendar color-blue"></i>
                    </a>
                    <h3> <a href="#howuse">COMO USAR</a></h3>

                </div>
            </div>
        </div>
        <!--Fim Seção do Cabeçalho -->

        <!--Seção SOBRE-->
        <section class="for-full-back color-white" id="about">
            <div class="container">

                <div class="row text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h1>Sobre</h1>
                        <h4><strong>Busque, crie, organize eventos para compartilhar com quem quiser</strong></h4>
                    </div>
                </div>

                <div class="row  space-pad">
                    <div class="col-md-3">
                        <div class="about-div text-center">
                            <i class="fa fa-clock-o fa-4x color-blue"></i>
                            <h3></h3>
                        </div>
                    </div>

                    <div class="col-md-6 ">
                        <p class="text-center">
                            Muitas pessoas costumam planejar ir a eventos para 
                            entretenimento, precisa ir a reuniões ou 
                            simplesmente querem se lembrar de algum evento que 
                            irá acontecer ou já aconteceu.
                            Outras pessoas costumam não consegui ter uma noção 
                            do tempo exata, acabam se atrasando ou falta 
                            reuniões, usa nenhum ou vários calendários, tem 
                            dificuldade encontrar coisas, costumam perder prazos 
                            e perde agenda frequentemente.
                        </p>

                        <p class="text-center">
                            O CalendarWeb pretende ajudar as tanto pessoas que são 
                            organizadas quanto pessoas cronicamente 
                            desorganizadas a ter uma ferramenta simples para 
                            administrar seu eventos podendo compartilha-los a 
                            qualquer um.
                        </p>

                    </div>

                    <div class="col-md-3">
                        <div class="about-div text-center">
                            <i class="fa fa-envelope-o fa-4x color-blue"></i>
                            <h3></h3>
                        </div>
                    </div>

                </div>

            </div>


        </section>
        <!--Fim Seção Sobre-->

        <!-- Seção SERVIÇOS -->
        <section class="for-full-back color-light " id="services">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h1>Serviços</h1>
                        <h4>
                            <strong>Nossos serviços dão a possibilidade de você 
                            </strong>
                        </h4>
                    </div>

                </div>
                <div class="row text-center space-pad">
                    <div class="col-md-4 ">

                        <div class="free-div">
                            <i class="fa fa-calendar-check-o color-blue" style="font-size: 72px"></i>
                            <h3>Gerenciar seus eventos</h3>
                            <h4>Gerencie de forma simples e rápida seus eventos 
                                para que consiga ter tempo para planejar-los e organizar-los 
                                melhor de acordo com sua rotina</h4>
                        </div>

                    </div>
                    <div class="col-md-4 ">

                        <div class="free-div">
                            <i class="fa fa-bell color-blue" style="font-size: 72px"></i>
                            <h3>Receber alertas</h3>
                            <h4>Seja informado caso um evento esteja prestes a acontecer por e-mail</h4>
                        </div>

                    </div>
                    <div class="col-md-4 ">

                        <div class="free-div">
                            <i class="fa fa-share-alt color-blue" style="font-size: 72px"></i>
                            <h3>Compartilhar eventos</h3>
                            <h4>Pesquise e adicione eventos públicos de seu interesse em seu calendário
                                e compartilhe com quem desejar</h4>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        <!--Fim Seção SERVIÇOS -->

        <!-- Seção COMO USAR -->
        <section class="for-full-back color-white " id="howuse">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h1>COMO USAR</h1>
                        <i class="fa fa-wrench color-blue" style="font-size: 24px"> EM CONSTRUÇÃO</i>
                        <h4>
                            <strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                            </strong>
                        </h4>
                    </div>

                </div> <!-- fim da primeira linha -->
            </div> <!-- fim do container -->
        </section>
        <!--Fim Seção COMO USAR -->        

        <!--Seção rodapé -->
        <div class="for-full-back" id="footer">
            <a href="www.calendarweb.pe.hu">www.calendarweb.pe.hu</a> <i class="fa fa-copyright"></i> Copyright 2016 Igor Túllio & Pedro Paul | All Right Reserved
        </div>
        <!--Fim Seção rodapé -->

        <!-- Subir Tela-->
        <a href="#" id="toTop">
            <i class="fa fa-caret-up color-blue" style="font-size: 24px"></i> 
        </a>

        <!-- ARQUIVOS JAVASCRIPT COLOCADOS NO FIM PARA REDUZIR O TEMPO DE CARREGAMENTO -->
        <!-- CORE JQUERY  -->
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/jquery.scroll.pack.js" type="text/javascript"></script>
        <script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
        <!-- BOOTSTRAP CORE SCRIPT   -->
        <script src="js/bootstrap.js"></script>
        <!-- CUSTOM SCRIPTS -->
        <script src="js/custom.js"></script>
        <script type="text/javascript">
            $(function () {
                $("#toTop").scrollToTop();
            });
        </script>
    </body>



</html>