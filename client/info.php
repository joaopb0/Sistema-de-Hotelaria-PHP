<?php
include("../server/connection.php");


$quarto = $_GET['quarto'];


$sql = "SELECT quarto, descricao, valor FROM quartos WHERE quarto = ?";
$stmt = $conn->prepare($sql);


if ($stmt) {

    $stmt->bind_param("s", $quarto);

    $stmt->execute();

    $stmt->bind_result($numeroQuarto, $descricao, $valor);

    $stmt->fetch();

    $stmt->close();
    $conn->close();
} else {

    die("Erro na consulta SQL: " . $conn->error);
}
//seleciona todos os quartos do banco de dados para organizar na página
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReservaQuarto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>

    </header>
    <section class="container">
        <h1>Informações do Quarto</h1>
        <p>Número do Quarto: <?php echo $quarto; ?></p>
        <p>Descrição do Quarto: <?php echo $descricao; ?></p>
        <p>Valor do quarto: <?php echo $valor; ?></p>
        <!-- Outras informações que você deseja exibir -->
    </section>

    <footer>
    <a href="index.php">PAGINA INICIAL</a>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>