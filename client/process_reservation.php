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
    <form class="row g-3 needs-validation" action="../server/bookroom.php" method="POST">
    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Nome</label>
        <input type="text" class="form-control" id="validationCustom01" name="nome" required>
        <div class="valid-feedback"></div>
    </div>
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Email</label>
        <input type="text" class="form-control" id="validationCustom02" name="email" required>
        <div class="valid-feedback"></div>
    </div>
    <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Checkin</label>
        <div class="input-group has-validation">
            <input type="date" class="form-control" id="validationCustomUsername" name="checkin" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">Insira um dia válido</div>
        </div>
    </div>
    <div class="col-md-3">
        <label for="quarto">Escolha o Quarto:</label>
        <select class="form-control" id="quarto" name="quarto" required>
            <?php
            // Conectar ao banco de dados e recuperar os quartos disponíveis
            include("../server/connection.php");
            $sql = "SELECT quarto FROM quartos"; // Supondo que 'disponivel' seja uma coluna que indica se o quarto está disponível
            $result = $conn->query($sql);

            // Exibir opções na lista suspensa
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['quarto'] . "'>" . $row['quarto'] . "</option>";
            }
            ?>
        </select>
        </div>
    <div class="col-md-3">
        <label for="validationCustom05" class="form-label">Hóspedes</label>
        <input type="number" class="form-control" id="validationCustom05" name="hospedes" required>
        <div class="invalid-feedback">Insira um número de hóspedes</div>
    </div>
    <div class="col-12 d-flex justify-content-center text-center">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">Aceito os termos do hotel</label>
            <div class="invalid-feedback">Você precisa aceitar os termos.</div>
        </div>
    </div>
    <div class="col-12">
        <center><button class="btn btn-primary" type="submit">Fazer Reserva</button></center>
    </div>
</form>
    </section>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>