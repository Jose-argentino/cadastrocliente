<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa cliente</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/main-formulario_pesquisa.css">

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
                        <li>
                            <a href="">link***********</a>
                        </li>

                        <li>
                            <a href="">link***********</a>
                        </li>

                        <li>
                            <a href="">link***********</a>
                        </li>

                        <li>
                            <a href="">link***********</a>
                        </li>
                    </ul>
                </nav>
            </div>

        </header>

        <main>

            <h1>
                Pesquisa de clientes
            </h1>

            <form action="pesquisa.php" method="GET">

                <div id="form-pesquisa">
                    <label for="termo" class="label">Digite a palavra da pesquisa:</label>
                    <input type="text" id="termo" name="termo" class="input">
                </div>
                
                <div id="input-button">
                        <input type="submit" id="button" value="Pesquisar">
                </div> 
            </form>
            
            <div class="button">
                <a href="index.php">
                    <button>
                        Voltar
                    </button>
                </a>
            </div>          

        </main>
    </div>
</body>
</html>