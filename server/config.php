<?php 
    include("connection.php");

    $nome = $_POST['nome'];
    $contato = $_POST['contato'];
    $quarto = $_POST['quarto'];
    $dia = $_POST['dia'];

    $sql = "INSERT INTO reserva (nome, contato, quarto, dia) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nome, $contato, $quarto, $dia); // os "s" indicam a quantidade de strings sendo passadas
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
    echo "Inserção bem-sucedida!";
    sleep(3);
    header("Location:../client/info.php");
    } else {
    echo "Erro ao inserir os dados: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
    ?>