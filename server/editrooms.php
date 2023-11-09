<?php
include("../server/connection.php");

if (isset($_GET['quarto'])) {
    $quarto = $_GET['quarto'];

    $sql = "SELECT * FROM quartos WHERE quarto = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $quarto);
    $stmt->execute();
    $result = $stmt->get_result();
    $quartoDetalhes = $result->fetch_assoc();

    if ($quartoDetalhes) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>

    </header>
    <section class="editarquarto">
        <div class="container">
            <h1>Editar Quarto #<?php echo $quartoDetalhes['quarto']; ?></h1>
            <form method="POST" action="editroom.php">
                <input type="hidden" name="quarto" value="<?php echo $quartoDetalhes['quarto']; ?>">
                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição</label>
                    <input type="text" class="form-control" id="descricao" name="descricao" value="<?php echo $quartoDetalhes['descricao']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="valor" class="form-label">Valor</label>
                    <input type="text" class="form-control" id="valor" name="valor" value="<?php echo $quartoDetalhes['valor']; ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </section>
    <footer>
        
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

<?php
    } else {
        header("Location: erro.php");
        exit();
    }
} else {
    header("Location: erro.php");
    exit();
}
?>