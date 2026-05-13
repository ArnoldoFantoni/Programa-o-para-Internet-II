<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "cadastro";
    $port = 3307;
    $conexao = new mysqli($host, $user, $password, $database, $port);

    // $nome = $_POST['nome'];
    // $email = $_POST['email'];

    // $sql = "INSERT INTO alunos(nome, email)
    //     VALUES('$nome', '$email')";
    
    // if ($conexao->query($sql) === TRUE) {
    //     echo "Dados salvos com sucesso!";
    //     echo "<br><a href='index.html'>Voltar</a>";
    // } else {
    //     echo "Erro ao salvar: " . $conexao->error;
    // }

    // echo"<br>";
    
    // $sql = "SELECT * FROM alunos";
    // $resultado = $conexao->query($sql);
    // while($linha = $resultado->fetch_assoc()) {
    //     echo $linha['nome'] . " - " . $linha['email'] . "<br>";
    // }
    // $conexao->close();

    //-- teste Envio 
?>