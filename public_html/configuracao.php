<?php
    //linha para tirar advertência
    error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED); 

    //conexão com o servidor
    $conexao = mysql_connect("mysql.hostinger.com.br", "u844436518_root", "dwigorpedro") or die("Erro ao conectar com o servidor!");
           
    //conexão com o banco
    $db = mysql_select_db("u844436518_cadas", $conexao) or die("Banco não encontrado!");    
?>