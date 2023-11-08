<?php
include("connection.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $checkin = $_POST['checkin'];
    $quarto = $_POST['quarto'];
    $hospedes = $_POST['hospedes'];

    $sql = "INSERT INTO reserva (nome, email, checkin, quarto, hospedes) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nome, $email, $checkin, $quarto, $hospedes);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        header("Location:../client/info.php?quarto=" . $quarto);
        exit();
    } 

    $stmt->close();
    $conn->close();
?>
