<?php

$servername = '';
$username = '';
$password = '';
$dbname = '';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) 
{
    die("Ошибка подключения: " . mysqli_connect_error());
}

?>