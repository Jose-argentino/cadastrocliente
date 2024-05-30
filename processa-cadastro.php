<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $descricao = $_POST["descricao"];
    
    $servernome="localhost";
    $username="root";
    $password="";
    $bdnome="db_scrum";

    $conn = new mysqli ($servernome, $username, $password, $bdnome);

    $sql = "INSERT INTO tb_usuario(nome, email, telefone, descricao) VALUES ('$nome', '$email','$telefone', '$descricao')";

    if($conn->query($sql) === TRUE){
        echo "Cadastro realizado com sucesso";
    }else{
        echo "Erro ao cadastrar";
    }

    $conn->close();
?>

<a href="index.php"Voltar></a>