<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
</head>
<body>
    <h1>Cadastro de Clientes</h1>
    <form action="processa_cadastro.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        
        <label for="telefone">telefone:</label>
        <input type="text" id="telefone" name="telefone"><br>
        
        <label for="descricao">Descrição</label>
        <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea><br>

        <input type="submit" value="Cadastrar"> <br><br>
       


    </form>
   
    <a href="cadastrocliente">Voltar</a>
</body>
</html>