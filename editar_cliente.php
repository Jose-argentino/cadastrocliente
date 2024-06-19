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
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/main-editarcliente.css">
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
            <h1>Editar Cliente</h1>
            <div>
                <form action="" method="POST">
                    <div>
                        <label for="nome" class="label">Nome</label>
                        <input type="text" id="nome" class="input" name="nome" value="<?php echo $row["nome"]; ?>" require> <br>
                    </div>

                    <div>
                        <label for="email" class="label">Email</label>
                        <input type="text" id="email" class="input" name="email" value="<?php echo $row["email"]; ?>" require> <br>
                    </div>

                    <div>
                        <label for="telefone" class="label">Telefone </label>
                        <input type="text" id="telefone" class="input" name="telefone" value="<?php echo $row["telefone"]; ?>" require> <br>
                    </div>

                    <div>
                        <label for="descricao" class="label">Descrição</label>
                        <input type="text" id="descricao" class="input" name="descricao" value="<?php echo $row["descricao"]; ?>" require> <br>
                    </div>
                    
                    <div id="input-button">
                        <input type="submit" id="button" value="Salvar Alteração">
                    </div>    

                </form>

                <div class="button">
                    <a href="index.php"><button>Voltar</button></a>
                </div> 
            </div> 
        </main>
    </div>
</div>
</body>
</html>