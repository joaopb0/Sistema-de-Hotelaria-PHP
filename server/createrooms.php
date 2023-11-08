<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Quartos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>

    </header>
    <section>
        <form class="row g-3 needs-validation" action="../server/insertrooms.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="quarto" class="form-label">Quarto</label>
                <input type="text" class="form-control" id="quarto" name="quarto" required>
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descricao</label>
                <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="imagem" class="form-label">Imagem do quarto:</label>
                <input type="file" class="form-control" id="imagem" name="imagem" required>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Adicionar quarto</button>
            </div>
        </form>
    </section>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>