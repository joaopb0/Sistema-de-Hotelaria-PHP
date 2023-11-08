<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>

    </header>
    <section class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <form class="row g-3" action="../server/config.php" method="POST">
            <div class="col-md-4">
                <label for="validationDefault01" class="form-label">Nome</label>
                <input type="text" class="form-control" id="validationDefault01" name="nome" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefault02" class="form-label">Contato</label>
                <input type="text" class="form-control" id="validationDefault02" name="contato" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefaultUsername" class="form-label">Quarto</label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2">N°</span>
                    <input type="text" class="form-control" id="validationDefaultUsername" name="quarto" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationDefault03" class="form-label">Dia</label>
                <input type="date" class="form-control" id="validationDefault03" name="dia" required>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </form>
    </section>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>