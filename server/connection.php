<?php
define('HOST', 'localhost:3304');
define('USER', 'root');
define('PASS', '');
define('BASE', 'reserva');

$conn = new MySQLi(HOST, USER, PASS, BASE);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>