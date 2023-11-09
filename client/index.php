<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotelaria do Diego - Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <header class="bg-primary text-white p-3 d-flex justify-content-between">
        <h1 class="text-center">Hotelaria do Diego</h1>
        <form action="dashboard.php" method="post" class="d-flex">
            <input type="text" class="form-control me-2" name="username" placeholder="Username" required>
            <input type="password" class="form-control me-2" name="password" placeholder="Password" required>
            <button type="submit" class="btn btn-success">Confirm</button>
        </form>
    </header>
    <main class="container mt-4">
        <section class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
            <!-- Trocar por informações do Banco de dados e se necessario trocar o arquivo de html pra php -->
            <img src="room1.jpg" class="card-img-top" alt="Quarto 1">
                    <div class="card-body">
                        <h5 class="card-title">Quarto Luxo</h5>
                        <p class="card-text">Descrição do quarto...</p>
                        <p class="card-text">Preço: $100 por noite</p>
                        <a href="roomDetails.php?id=1" class="btn btn-primary">Detalhes</a>
                    </div>
                </div>
            </div>
            <a href="roomavailable.php" class="btn btn-primary">Ver mais quartos</a>
            <div>
            <a href="../server/admin.php" class="btn btn-primary">Painel admin</a>
            </div>
            <!-- Se achar mais facil e necessario pode só replciar o código do card pra fazer mais quartos -->
        </section>
    </main>
    <footer class="bg-primary text-white text-center p-3 mt-5">
        &copy; 2023 Diego's hotel
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
