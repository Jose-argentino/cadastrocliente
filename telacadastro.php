<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela de cadastro</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/main-telacadastro.css">

</head>
<body>
    <div id="conteiner">
        <header>
            <div>
                <img src="img/logo.png" alt="" id="headerimg">
            </div>

            <div id="navheader">
                <nav id="navprincipal">
                    <ul>
                        <li><a href="">link***********</a></li>
                        <li><a href="">link***********</a></li>
                        <li><a href="">link***********</a></li>
                        <li><a href="">link***********</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <main>
            <h1>Cadastro de clientes</h1>
            <form action="processa-cadastro.php" method="POST">
                <div>
                <label for="nome" class="label">Nome:</label>
                <input type="text" id="nome" name="nome" class="input">
                </div>

                <div>
                <label for="email" class="label">Email:</label>
                <input type="email" id="email" name="email" class="input">
                </div>

                <div>
                <label for="telefone" class="label">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" class="input">
                </div>

                <div>
                <label for="descricao" class="label">Descrição:</label>
                <input type="descricao" id="descricao" name="descricao" class="input">
                </div>

                <div class="button">
                    <button type="submit">Cadastrar</button>
                </div>
            </form>
            
            <div class="button">
                <a href="index.php"><button>Voltar</button></a>
            </div>          

        </main>
    </div>
</body>
</html>