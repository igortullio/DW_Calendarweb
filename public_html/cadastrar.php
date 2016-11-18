<?php

	require "configuracao.php";
	
	$nome = $_POST['nome'];
	$login1 = $_POST['login1'];
	$senha = $_POST['senha'];
	$senha2 = $_POST['senha2'];

	if(empty($nome)){
		echo "<script>alert('Preencha o nome para se cadastrar.'); history.back();</script>";
	}elseif(empty($login1)){
		echo "<script>alert('Preencha o login para se cadastrar.'); history.back();</script>";
	}elseif(empty($senha)){
		echo "<script>alert('Preencha a senha para se cadastrar.'); history.back();</script>";
	}elseif(empty($senha2)){
		echo "<script>alert('Preencha a senha para se cadastrar.'); history.back();</script>";
	}elseif($senha != $senha2){
		echo "<script>alert('Senhas não coincidem.'); history.back();</script>";
	}else{
		$query = mysql_query("SELECT * FROM usuario WHERE login = '$login1'") or die(mysql_error());
		$query1 = mysql_num_rows($query);
		if($query1 == 1){
			echo "<script>alert('Esse login já existe.'); history.back();</script>"; 
		}else{
			mysql_query("INSERT INTO usuario (nome, login, senha) values ('$nome','$login1','$senha')");
			echo "<script>alert('Usuário cadastrado com sucesso.');</script>";
			echo "<meta http-equiv='refresh'>";
		}
	}

?>