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


        
            <?php
                //conexao com o banco de dados
                $servername = "localhost";
                $username = "root";
                $password = "";
                $db_name = "bd_cadastro";
                    
                $conn = new mysqli($servername, $username, $password, $db_name);

                //verifica se a conexao funcionou
                if ($conn->connect_error){
                    die("Erro na conexao com o banco de dados: ". $conn->connect_error);
                }

                $termo = $_GET['termo'];

                $sql = "SELECT * FROM clientes WHERE nome LIKE '$%termo%' OR email LIKE '$%termo%' OR telefone LIKE '$%termo%' OR descricao LIKE '$%termo%'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0){
                    echo "<h2> Resultado da pesquisa</h2>";
                    echo "<table border = '1'>";
                    echo "<tr><th>Nome</th><th>Email</th><th>Telefone</th><thh>Descrição</th></tr>";
                    while($row = $result->fetch_assoc()){
                        echo "<tr><td>".$row["nome"]."<tr><td>".$row["email"]."<tr><td>".$row["telefone"]."<tr><td>".$row["descricao"]."</tr></td>";
                    }
                    echo "</table>";
                }else{
                    echo "<h2>Nenhum Resultado encontrado.</h2>";
                }
                $conn->close();
            ?>




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