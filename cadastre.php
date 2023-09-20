<?php
if(isset($_POST['submit'])){
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $query = "INSERT INTO usuarios (nome, email, celular) 
              VALUES (?, ?, ?)";
    
    $result = mysqli_query($conexao, $query);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Digital_Marketing_logo-removebg-preview.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="cadastre.css">
    <title>Digital Marketing - Home</title>
</head>

<body>
       <header>
        <a href="home.html"><img id="foto" src="Screenshot_1-removebg-preview.png" alt="logo"></a> <!--Foto mexendo-->
    </header>
    
    <nav id="navegatin">  <!--Navegação-->
        <ul>
            <a href="home.html"><li>Início</li></a>
            <a href="serviços.html"><li>Serviços</li></a>
            <a href="Sobre.html"><li>Sobre</li></a>
            <a href="contato.html"><li>Contato</li></a>
            <a href="cadastre.html"><li>Cadastre-se</li></a>
            <a href="formulario.html"><li id="free">Material Gratuito</li></a>
        </ul>
    </nav>
    <section><h1>Formulário de Cadastro</h1>
        <form id="meuFormulario" method="post" action="config.php">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome"  autocomplete="off" required><br><br>
          
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"  autocomplete="off" required><br><br>
          
            <label for="celular">Celular:</label>
            <input type="celular" id="celular" name="celular"  autocomplete="off" required><br><br>
          
            <button type="submit">Cadastrar</button>
          </form>
          
          <div id="mensagem"></div>
          
          <script>
            const formulario = document.getElementById('meuFormulario');
            const mensagemDiv = document.getElementById('mensagem');
          
            formulario.addEventListener('submit', function(evento) {
              evento.preventDefault(); // Impede que o formulário seja enviado
           
              const nome = formulario.nome.value;
              const email = formulario.email.value;
              const celular = formulario.celular.value;
          
              
          
              const mensagem = `Obrigado, ${nome}! Seu email (${email}), celular (${celular}) foram cadastrados com sucesso! Em breve entraremos em contato.`;
              mensagemDiv.textContent = mensagem;

              formulario.reset(); // Limpa os campos do formulário
            });
          </script>
    </section>





    </body>
    </html>