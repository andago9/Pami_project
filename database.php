<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'PAMI';

$conn = mysqli_connect($server, $username, $password, $database) or die('Error al conectar con MySQL Server.');
