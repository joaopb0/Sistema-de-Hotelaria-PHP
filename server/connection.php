<?php
define('HOST', 'localhost:3304'); //se der erro de autenticação, remover o :3304 e deixar só localhost
define('USER', 'root');
define('PASS', '');
define('BASE', 'reserva');

$conn = new MySQLi(HOST, USER, PASS, BASE);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
