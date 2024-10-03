<?php

require_once('db.php');

$login = $_POST['login'];
$password = $_POST['password'];
$repeat_password = $_POST['repeat_password'];
$email = $_POST['email'];

if (empty($login) || empty($password) || empty($repeat_password) || empty($email)) 
{
    echo "Заполните все поля!";
}
else 
{
    if ($password != $repeat_password) 
    {
        echo "Пароли не совпадают!";
    } 
    else 
    {
        $sql = "INSERT INTO `users` (login, pass, email) VALUES ('$login', '$password', '$email')";
        if ($conn -> query($sql) === TRUE)
        {
            echo "Вы успешно зарегистрированы!";
        }
        else 
        {
            echo "Ошибка регистрации: ". $conn->error;
        }
    }
}