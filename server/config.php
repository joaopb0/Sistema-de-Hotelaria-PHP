<?php 
    include("connection.php");

    $nome = $_POST['nome'];
    $contato = $_POST['contato'];
    $quarto = $_quarto['quarto'];
    $dia = $_dia['dia'];

    $sql = "INSERT INTO nome_da_tabela (nome, contato, quarto, dia) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nome, $contato, $contato, $dia); // 'ss' indica que estamos passando duas strings
    $stmt->execute();
    $stmt->close();

    if ($stmt->affected_rows > 0) {
        echo "Inserção bem-sucedida!";
    } else {
        echo "Erro ao inserir os dados: " . $conn->error;
    }
    ?>