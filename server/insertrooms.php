<?php
include("connection.php");

if (isset($_POST['quarto']) && isset($_POST['descricao']) && isset($_POST['valor']) && isset($_FILES['imagem'])) {
    $quarto = $_POST['quarto'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];
    $imagem_tmp = $_FILES['imagem']['tmp_name'];

    $fp = fopen($imagem_tmp, 'rb');
    $imagem = fread($fp, filesize($imagem_tmp));
    fclose($fp);

    $sql = "INSERT INTO quartos (quarto, descricao, valor, imagem) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $quarto, $descricao, $valor, $imagem);
    
    if ($stmt->execute()) {
        echo "Inserção bem-sucedida!";
    } else {
        echo "Erro ao inserir os dados: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Todos os campos são obrigatórios.";
}

$conn->close();
?>