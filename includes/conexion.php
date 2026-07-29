<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$host = "localhost";
$usuario = "root";
$password = "";
$baseDatos = "AsociacionDB";

$conn = new mysqli($host, $usuario, $password, $baseDatos);

$conn->set_charset("utf8");