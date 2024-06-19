<?php
    //verifica se um cliente foi selecionado para edição
    if(isset($_GET["id"])){
        $client_id = $_GET["id"];
        
        //conexao com o banco de dados
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db_name = "bd_cadastro";

        $conn = new mysqli($servername, $username, $password, $db_name);

        if($conn->connect_error) {
            die("Erro na conexão com o banco de dados: ". $conn->connect_error);
        }

        $sql = "DELETE FROM clientes WHERE ID = $client_id";

        if ($conn->query($sql)===TRUE){
            // redireciona para a pagina clientes.php
            header("location: clientes.php?excluido=true");
            exit;
        }else{
            echo "Erro ao excluir cliente: ".$conn->error;
        }
    }else{
        echo "Cliente não especificado para a exclusão.";
    }
?>