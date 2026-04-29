<?php
    $nome = $_POST["nome"];
    $assunto = $_POST["assunto"];

    echo "<p>Nome: " . htmlspecialchars($nome) . "</p>";
    echo "<p>Assunto: $assunto </p>";
?>