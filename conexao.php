<?php

$host = "localhost";  
$usuario = "root"; 
$senha = "123";  
$banco = "landing_page"; 


try { 
  
    
		
    $conexao = new PDO("mysql:host=$host;dbname=$banco;charset=utf8", $usuario, $senha);
  
  
	
  
   
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch(PDOException $e) {


    die('Não foi possível conectar ao banco de dados. Erro detectado: ' . $e->getMessage());
}

?>