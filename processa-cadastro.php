<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        //CONEXÃO COM BANCO DE DADOS
        $servername ="localhost";
        $username = "root";
        $password = "";
        $dbname = "db_cadastro";

        $conn = mysqli($servername,$username,$password,$dbname);

        if($conn->connect_error){
            die("Erro na conexão com o banco de dados:" . $conn->connect_eror);
        }

        //se não deu erro , captura os dados do formulario
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        $descricao = $_POST["descricao"];

        //sql para jogar no banco de dados e na tabela os dados coletados
        $sql = "INSERT INTO clientes (nome,email,telefone,descricao) VALUES ('$nome','$email','$telefone',$descricao')";

        if ($conn->query($sql) === TRUE){
            echo "Cadastro realizado com sucesso!";
        } else{
            echo "Erro ao cadastrar: ". $conn->error;
        }
        $conn->close();
    }
?>
        <a href="index.php">Voltar</a>
