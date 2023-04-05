<?php

$hostname = "localhost";
$user = "root";
$password = "root";
$db = "fundacion";

$connection = mysqli_connect($hostname , $user , $password, $db);
if(!$connection) echo "error en la conexion";








?>