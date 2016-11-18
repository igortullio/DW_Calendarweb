<?php

	require "configuracao.php";
	
	session_start();	
		
	$login1 = $_POST['login1'];
	$senha = $_POST['senha'];

	$query = mysql_query("SELECT id_Usua, login, senha FROM usuario WHERE login='$login1' AND senha='$senha'") or die(mysql_error());
	$total = mysql_num_rows($query);		
		
	if($total == 1){
		$dados = mysql_fetch_array($query);
		$_SESSION["id_Usua"] = $dados["id_Usua"]; 
		$_SESSION["nome"] = stripslashes($dados["nome"]); 
		
		header("Location: areaUsuario\\calendario.php"); 
		exit; 
	} else {
		echo "<script>alert('Login e/ou senha incorreto(s)'); history.back();</script>"; 
	}

?>