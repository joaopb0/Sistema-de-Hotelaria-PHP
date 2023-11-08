<?php 
    include("connection.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $checkin = $_POST['checkin'];
    $quarto = $_POST['quarto'];
    $hospedes = $_POST['hospedes'];

    $sql = "INSERT INTO reserva (nome, email, checkin, quarto, hospedes) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nome, $email, $checkin, $quarto, $hospedes); // os "s" indicam a quantidade de strings sendo passadas
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
    echo "Inserção bem-sucedida!";
    sleep(3);
    header("Location:../client/info.php?quarto=" . $quarto);
    } else {
    echo "Erro ao inserir os dados: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
    ?>