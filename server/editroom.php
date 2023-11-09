<?php
include("../server/connection.php");

if (isset($_POST['quarto'], $_POST['descricao'], $_POST['valor'])) {
    $quarto = $_POST['quarto'];
    $descricao = $_POST['descricao'];
    $valor = $_POST['valor'];

    $sql = "UPDATE quartos SET descricao = ?, valor = ? WHERE quarto = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $descricao, $valor, $quarto);
    $stmt->execute();

    header("Location: rooms.php");
    exit();
} else {
    
    header("Location: erro.php");
    exit();
}
?>