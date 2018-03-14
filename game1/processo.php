<?php
	ini_set('default_charset','UTF-8');
	error_reporting(0);
   
   
   session_start();
   
    // php para mudar a cor do tabuleiro
	$_SESSION["fundo"] = $_POST["bg"];
	
	
	// php para marcar as jogadas
	$jogo=array	(
				array($_SESSION["a"]=$_POST["a"], $_SESSION["b"]=$_POST["b"], $_SESSION["c"]=$_POST["c"]),
				array($_SESSION["d"]=$_POST["d"], $_SESSION["e"]=$_POST["e"], $_SESSION["f"]=$_POST["f"]),
				array($_SESSION["g"]=$_POST["g"], $_SESSION["h"]=$_POST["h"], $_SESSION["i"]=$_POST["i"])
				)
	
   
?> 
  
     