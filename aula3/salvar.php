<?php
    // $nome = $_POST['nome'];
    // $arquivo = fopen("nomes.txt", "a");
    // fwrite($arquivo, $nome . "\n");
    // fclose($arquivo);
    // echo "Nome salvo!";

    include "conexao.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "INSERT INTO alunos(nome, email)
        VALUES('$nome', '$email')";
    
    if ($conexao->query($sql) === TRUE) {
        echo "Dados salvos com sucesso!";
        echo "<br><a href='index.html'>Voltar</a>";
    } else {
        echo "Erro ao salvar: " . $conexao->error;
    }

    $conexao->close();
?>