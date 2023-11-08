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
        <form class="row g-3 needs-validation" action="../server/config.php" method="POST">
        <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nome</label>
    <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
    <div class="valid-feedback">
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Email</label>
    <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
    <div class="valid-feedback">
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Check-in</label>
    <div class="input-group has-validation">
      <input type="date" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Insira um dia valido
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Check-out</label>
    <input type="date" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Insira um dia válido
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Quarto</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value=""></option>
      <option>1</option>
    </select>
    <div class="invalid-feedback">
      Insira um dia válido
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Hospedes</label>
    <input type="number" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Insira um número de hospedes
    </div>
  </div>
  <div class="col-12 d-flex justify-content-center text-center">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Aceito os termos do hotel
      </label>
      <div class="invalid-feedback">
        Você precisa aceitar os termos.
      </div>
    </div>
  </div>
  <div class="col-12">
    <center><button class="btn btn-primary" type="submit">Submit form</button></center>
  </div>
</form>
    </section>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>