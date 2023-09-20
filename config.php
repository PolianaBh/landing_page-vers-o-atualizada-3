<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'landing_page'; 

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conexao->connect_errno) {
    echo "Erro";
} 
else{
    ECHO"CONECTADO";
}
?>