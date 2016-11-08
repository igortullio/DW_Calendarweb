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
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
        <!-- STYLE CSS CUSTOMIZADO -->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
        <link href='http://fonts.googleapis.com/css?family=Ruluko' rel='stylesheet' type='text/css' />
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <!-- Importações do fullcalendar -->
        <link href='js/vendor/fullcalendar/fullcalendar.css' rel='stylesheet' />
        <link href='css/calendario-style.css' rel='stylesheet' />
        <script src='js/vendor/fullcalendar/lib/moment.min.js'></script>
        <script src='js/vendor/fullcalendar/lib/jquery.min.js'></script>
        <script src='js/vendor/fullcalendar/fullcalendar.min.js'></script>
        <script src='js/vendor/fullcalendar/locale-all.js'></script>
        <?php 
            // Código que carrega os eventos
            $eventos = mysqli_connect();
        
            $eventos_json = array();
            foreach ($eventos as $elm) {
                array_push($eventos_json, $elm);
            }
        
            // Aqui transforma para p formato JSON
            $saida = json_encode($eventos_json);        
        ?>
        <script>
            $(document).ready(function () {
                           
                $('#calendar').fullCalendar({
                    locale: 'pt-br',
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month'
                    },
                    //defaultDate: '2016-02-06',
                    navLinks: true, // can click day/week names to navigate views
                    selectable: true,
                    selectHelper: true,
                    select: function (start, end) {
                        var title = prompt('Título:');
                        var eventData;
                        if (title) {
                            eventData = {
                                title: title,
                                start: start,
                                end: end
                            };
                            
                            // Insira aqui uma chamada AJAX para enviar os dados para o PHP
                            var url = "/save-event.php";
                            
                            $.ajax({
                              type: "POST",
                              url: url,
                              data: JSON.Stringfy(eventData),
                              success: function () {
                                  // Inserir aqui uma mensagem em caso de sucesso no envio da requisição HTTP
                                  alert("Dados inseridos com sucesso no servidor");
                              },
                              dataType: "json"
                            });
                            
                            $('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
                        }
                        $('#calendar').fullCalendar('unselect');
                    },
                    editable: true,
                    eventLimit: true, // allow "more" link when too many events
                    events: <?php echo $saida ?>
                });

            });
        </script>
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
            </div>
            <!-- /.container -->
        </nav>
        <!-- Fim Navegação -->

        <!-- Seção Calendário -->
        <form action="/">
            <div class="row text-right">
                <div class="col-md-10" style="padding-bottom: 5px">
                    <input id=tags name=tags placeholder="Pesquisa..." size=25 type=text>
                    <input name=commit style="display:none;" type=submit value=Search>
                    <br>
                </div>
            </div>
        </form>
        <div id='calendar'></div>
        <!-- Fim Seção Calendário -->

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
        <script src="js/jquery.scroll.pack.js" type="text/javascript"></script>
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