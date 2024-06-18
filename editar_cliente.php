<?php
    //verifica se um cliente foi selecionado para edição
    if (isset($_GET["id"])) {
        $cliente_id = $_GET["id"];
    
        //conexao com o banco de dados
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db_name = "bd_cadastro";
        
        $conn = new mysqli($servername, $username, $password, $db_name);

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

            if($conn->query($sql)===TRUE){
            echo "Dados atualizados com sucesso";
            }else{
            echo "Erro ao atualizaros dados".$conn->error;
            }
        }
    

        $conn->close();
    }else{
        echo "Cliente não especificado para a edição !";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Editar Cliente</h1>
    <form action="" method="POST">
        <label for="nome">Nome</label>
        <input type="text" id="nome"  name="nome" value="<?php echo $row["nome"]; ?>" require> <br>

        <label for="email">Email</label>
        <input type="text" id="email"  name="email" value="<?php echo $row["email"]; ?>" require> <br>
        
        <label for="telefone">Telefone </label>
        <input type="text" id="telefone"  name="telefone" value="<?php echo $row["telefone"]; ?>" require> <br>

        <label for="descricao">Descrição</label>
        <input type="text" id="descricao"  name="descricao" value="<?php echo $row["descricao"]; ?>" require> <br>

        <input type="submit" value="Salvar Alteração">

    </form>
</body>
</html>