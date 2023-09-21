<!DOCTYPE html>

<html lang="pt-br">

<head>
               
			   <meta name="author" content="">    
               <meta charset="UTF-8">
	           <title>Cadastro de Aluno</title>
			   
			   			       
	           <title>Cadastro de Aluno</title>
</head>

<body>

<?php

require_once 'conexao.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $nome = $_POST['nome'];
     $email = $_POST['email'];
     $celular = $_POST['celular'];
   
   
 

	try { 
       
        $inserir = $conexao->prepare("INSERT INTO usuarios (nome, email, celular) 
              VALUES (:nome, :email, :celular)"); 
		
		
		
        
        $inserir->bindValue(':nome', $nome);
        $inserir->bindValue(':email', $email);
        $inserir->bindValue(':celular', $celular);
        
       
	    if ($inserir->execute()) {
		
            echo "Dados inseridos no Banco de Dados com sucesso!<br />";
        } else {
		
            echo "Erro ao inserir os dados: " . $inserir->errorInfo()[2];
        }

        
        $inserir = null;
		
		
    } catch(PDOException $e) {
        echo "Erro ao inserir os dados: " . $e->getMessage();
    }
}


$conexao = null;
?>

</body>

</html>
	
	
	