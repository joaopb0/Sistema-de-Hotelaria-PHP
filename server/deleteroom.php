<?php
include("connection.php");

if(isset($_GET['quarto']) && is_numeric($_GET['quarto'])) {
    $quarto = $_GET['quarto'];
    
    $sql = "DELETE FROM quartos WHERE quarto = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $quarto);

    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header("Location: admin.php");
        exit();
    } else {
        echo "Erro ao excluir o quarto: " . $conn->error;
    }
    
    $stmt->close();
    $conn->close();
} else {
    echo "Parâmetros inválidos.";
}
?>