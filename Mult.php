//Задача на циклы и умножение
<?php

error_reporting(-1);

$N = readline("Введите число N: ");

for ($i = 1; $i <= $N; $i++)
{
    $result = $i * $i;
    echo "$i = $result\n";
}
