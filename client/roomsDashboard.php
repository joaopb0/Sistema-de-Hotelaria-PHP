<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="bg-primary text-white p-3">
        <h1 class="text-center">Dashboard</h1>
    </header>
    <main class="container mt-4">
        <h2>Lista De Quartos</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome do Quarto</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Quarto Normal</td>
                    <td>$100</td>
                    <td>
                        <a href="editRoom.php?id=1" class="btn btn-primary btn-sm">Editar</a>
                        <a href="deleteRoom.php?id=1" class="btn btn-danger btn-sm">Deletar</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <a href="addRoom.php" class="btn btn-success">Adicionar Quarto</a>
    </main>
    <footer class="bg-primary text-white text-center p-3 mt-5">
        &copy; 2023 Diego's hotel
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
