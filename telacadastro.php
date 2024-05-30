<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela de cadastro</title>
    <link rel="stylesheet" href="css/header.css">

</head>
<body>
    <header></header>
    <h1>CAdastro de clientes</h1>
    <form action="processa-cadastro.php" method="POST">
        <div>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">
        </div>

        <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        </div>

        <div>
        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone">
        </div>

        <div>
        <label for="descricao">Descrição:</label>
        <input type="descricao" id="descricao" name="descricao">
        </div>

        <button type="submit">Cadastrar</button>
    </form>
    
    <button><a href="index.php">Voltar</a></button>
</body>
</html>