<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela de cadastro</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/main-telacliente.css">

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
                        <li><a href="">***********</a></li>
                        <li><a href="">***********</a></li>
                        <li><a href="">***********</a></li>
                        <li><a href="">***********</a></li>
                    </ul>
                </nav>
            </div>
        </header>
    
        <main>
            <h1>Clientes</h1>
            
            <div>
            <?php
                // codigo sujerido pelo chat GPT
                // CONEXÃO COM BANCO DE DADOS
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "bd_cadastro";

                    /*
                        $servername: Define o endereço do servidor de banco de dados (neste caso, localhost, que é o próprio servidor onde o script está sendo executado).
                        $username: Nome de usuário para conectar ao banco de dados (root é o nome de usuário padrão do MySQL).
                        $password: Senha correspondente ao nome de usuário (root não tem senha por padrão, mas isso não é seguro em um ambiente de produção).
                        $dbname: Nome do banco de dados ao qual você deseja conectar (bd_cadastro).
                    */

                // Cria conexão
                $conn = new mysqli($servername, $username, $password, $dbname);

                    /*
                        new mysqli(...): Cria uma nova conexão com o banco de dados usando os parâmetros fornecidos. A conexão é armazenada na variável $conn.
                    */

                // Verifica conexão
                if ($conn->connect_error) {
                    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
                }
                    /*
                        $conn->connect_error: Verifica se houve algum erro ao tentar se conectar ao banco de dados.
                        die(...): Se houve um erro na conexão, exibe uma mensagem e interrompe a execução do script.
                    */

                // SQL para selecionar todos os clientes
                $sql = "SELECT id, nome, email, telefone, descricao FROM clientes";
                $result = $conn->query($sql);

                    /*
                        $sql: Define uma string contendo a consulta SQL para selecionar todos os campos (id, nome, email, telefone, descricao) da tabela clientes.
                        $conn->query($sql): Executa a consulta SQL na conexão com o banco de dados e armazena o resultado na variável $result.
                    */

                if ($result->num_rows > 0) {
                    echo "<table>";
                    echo "<tr><th>ID</th><th>Nome</th><th>Email</th><th>Telefone</th><th>Descrição</th></tr>";

                        /*
                            $result->num_rows > 0: Verifica se a consulta retornou algum resultado.
                            echo "<table>";: Se houver resultados, inicia a tabela HTML.
                            echo "<tr><th>...</th></tr>";: Cria o cabeçalho da tabela com os nomes das colunas.
                        */

                    // Output de cada linha da tabela
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . htmlspecialchars($row["nome"], ENT_QUOTES, 'UTF-8') . "</td>";
                        echo "<td>" . htmlspecialchars($row["email"], ENT_QUOTES, 'UTF-8') . "</td>";
                        echo "<td>" . htmlspecialchars($row["telefone"], ENT_QUOTES, 'UTF-8') . "</td>";
                        echo "<td>" . htmlspecialchars($row["descricao"], ENT_QUOTES, 'UTF-8') . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "Nenhum cliente encontrado.";
                }

                    /*
                        while ($row = $result->fetch_assoc()) { ... }: Itera sobre cada linha retornada pela consulta. fetch_assoc() retorna uma linha do resultado como um array associativo.
                        echo "<td>" . $row["..."] . "</td>";: Para cada linha, cria células <td> para cada campo (id, nome, email, telefone, descricao).
                        htmlspecialchars(..., ENT_QUOTES, 'UTF-8'): Escapa caracteres especiais para evitar problemas de segurança, como XSS (Cross-Site Scripting).
                        echo "</table>";: Fecha a tabela HTML após iterar por todos os resultados.
                    */

                // Fecha a conexão
                $conn->close();

                    //$conn->close(): Fecha a conexão com o banco de dados, liberando recursos.
                
            ?>

            </div>


            <div class="button">
                <a href="index.php"><button>Voltar</button></a>
            </div>          

        </main>
    </div>
</body>
</html>