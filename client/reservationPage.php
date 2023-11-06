<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserve Seu Quarto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="bg-primary text-white p-3">
        <h1 class="text-center">Hotelaria do Diego</h1>
    </header>
    <main class="container mt-4">
        <section class="reservation-form">
            <h2>Reserve Seu Quarto</h2>
            <form action="process_reservation.php" method="POST">
                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#confirmationModal">Efetuar Reserva</button>
            </form>
        </section>
    </main>
    <footer class="bg-yellow text-white text-center p-3 mt-5">
        &copy; 2023 Hotelaria do Diego
    </footer>

    <!-- Modal da confirmação de reserva -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Confirmação da Reserva</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Sua reserva foi efeutada com sucesso! Obrigado por escolher a Hotelaria do Diego!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
