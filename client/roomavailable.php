<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quartos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>

    </header>
    <section class="verquartos">
    <?php

include("../server/connection.php");

$sql = "SELECT * FROM quartos";
$result = $conn->query($sql);

// exibe os quartos disponiveis
while ($row = $result->fetch_assoc()) {
    echo "<div class='quarto'>";
    echo "<h2>Quarto #" . $row['quarto'] . "</h2>";
    echo "<p>Descrição: " . $row['descricao'] . "</p>";
    echo "<img src='" . $row['imagem'] . "' alt='Imagem do Quarto'>";
    echo "<a href='process_reservation.php" . "'>Reservar Agora</a>";
    echo "</div>";
}

$conn->close();
?>
    </section>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>