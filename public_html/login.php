<?php

	require_once "configuracao.php";
	
?>

<html lang="pt-br">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Login CalendarWeb</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="O usuario devera logar no sistema para que consiga acessar sua conta e utilizar o site" />
        <meta name="author" content="Pedro Paul" />

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
        <!-- Le styles -->
        <link href="css/login-style.css" type="text/css" rel="stylesheet" />
        <link href="css/bootstrap-responsive.css" rel="stylesheet" />

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
                    <script src="../js/html5shiv.js"></script>
                    <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-144-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-114-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-72-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" href="http://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-57-precomposed.png" />
        <link rel="shortcut icon" href="http://getbootstrap.com/2.3.2/assets/ico/favicon.png" />
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
            </div>
            <!-- /.container -->
        </nav>
        <!-- Fim Navegação -->

        <!-- Seção Login -->
        <div class="container">

            <form method="POST" action="?go=entrar" form class="form-signin">
			
                <h2 class="form-signin-heading">Login</h2>
				<input type="text" name ="login1" id="login1" class="form-control" required="required" placeholder="Login" maxlength="15" />
				<input type="password" name ="senha" id="senha" class="form-control" required="required" placeholder="Senha" maxlength="15" />
				
                <label class="checkbox">
                    <input value="remember-me" type="checkbox" /> Lembrar-me
                </label>
				
                <button class="btn btn-large btn-primary" type="submit">
                    <i class="fa fa-sign-in"></i> Entrar
                </button>
				
                <a href="cadastro.php" class="btn btn-large btn-primary" role="button">
                    <i class="fa fa-user-plus"></i> Cadastrar
                </a>
				
            </form>

        </div>
        <!-- Fim Seção Login -->

        <!--Seção rodapé -->
        <div class="for-full-back" id="footer">
            <a href="www.calendarweb.pe.hu">www.calendarweb.pe.hu</a> <i class="fa fa-copyright"></i> Copyright 2016 Igor Túllio & Pedro Paul | All Right Reserved
        </div>
        <!--Fim Seção rodapé -->

        <!-- Subir Tela-->
        <a href="#" id="toTop">
            <i class="fa fa-caret-up color-blue" style="font-size: 24px"></i> 
        </a>

        <!-- Le javascript
                    ================================================== -->
        <!-- Colocados no final do documento para que então a página carregue mais rápido -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap-transition.js"></script>
        <script src="js/bootstrap-alert.js"></script>
        <script src="js/bootstrap-modal.js"></script>
        <script src="js/bootstrap-dropdown.js"></script>
        <script src="js/bootstrap-scrollspy.js"></script>
        <script src="js/bootstrap-tab.js"></script>
        <script src="js/bootstrap-tooltip.js"></script>
        <script src="js/bootstrap-popover.js"></script>
        <script src="js/bootstrap-button.js"></script>
        <script src="js/bootstrap-collapse.js"></script>
        <script src="js/bootstrap-carousel.js"></script>
        <script src="js/bootstrap-typeahead.js"></script>
        <!-- CORE JQUERY  -->
        <script src="js/jquery.scroll.pack.js" type="text/javascript"></script>
        <script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function () {
                $("#toTop").scrollToTop();
            });
        </script>

    </body>

</html>

<?php

	if(@$_GET['go'] == 'entrar'){		
		$login1 = $_POST['login1'];
		$senha = $_POST['senha'];

		$query = mysql_query("SELECT login, senha FROM usuario WHERE login='$login1' AND senha='$senha'") or die(mysql_error());
		$query1 = mysql_num_rows($query);
		if($query1 != 1){
			echo "<script>alert('Login e/ou senha incorreto(s)'); history.back();</script>"; 
		}else{
			echo "<script>alert('ENTROU');</script>";				
		}
		
	}

?>