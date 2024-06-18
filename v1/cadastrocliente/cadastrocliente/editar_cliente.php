<?php
//verifica se um cliente foi selecionado para edição
    if (isset($_GET["id"])) {
        $cliente_id = $_GET["id"];
    
    //conexao com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "bd_cadastro";
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexao com o banco de dados: " . $conn->connect_error);
    }   

    //obter os dados do cliente para edição
    $sql = "SELECT * FROM clientes WHERE id = $cliente_id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    } else {
        echo "Cliente não encontrado.";
        exit;
    }
    
    //processa o formulario para edicao quando enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $novo_nome = $_POST["nome"];
        $novo_email = $_POST["email"];
        $novo_telefone = $_POST["telefone"];
        $novo_descricao = $_POST["descricao"];

    //atualiza os dados do cliente no banco de dados
    $sql = "UPDATE clientes SET nome = '$novo_nome', email = '$novo_email', telefone = '$novo_telefone', descricao = '$novo_descricao' WHERE id = $cliente_id";    

    




    }
    
    
    
    
    }












?>