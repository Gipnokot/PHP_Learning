<?php

error_reporting(-1);

$rates = array(3, 5, 3, 2, 1, 8, 4, 3, 4, 3, 2, 3);

$ratesSum = array_sum($rates);
$ratesCount = count($rates);
$averageRate = $ratesSum / $ratesCount;

echo "Пользователю поставили {$ratesCount} оценок, их сумма = {$ratesSum}\nСредний балл - " . sprintf("%.2f", $averageRate);
