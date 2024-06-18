<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // CONEXÃO COM BANCO DE DADOS
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bd_cadastro";

        // Cria conexão
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica conexão
        if ($conn->connect_error) {
            die("Erro na conexão com o banco de dados: " . $conn->connect_error);
        }

        // Se não deu erro, captura os dados do formulário
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $descricao = $_POST["descricao"];

        // SQL para inserir os dados na tabela
        $sql = "INSERT INTO clientes (nome, email, telefone, descricao) VALUES ('$nome','$email','$telefone','$descricao')";

        // Prepara a declaração
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
          die("Erro na preparação da declaração: " . $conn->error);
        }


        // Executa a declaração
        if ($stmt->execute()) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro ao cadastrar: " . $stmt->error;
        }

        // Fecha a declaração e a conexão
        $stmt->close();
        $conn->close();
    }
?>

<a href="index.php">Voltar</a>