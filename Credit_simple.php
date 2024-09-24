// решение задачи с кредитами(простая)
<?php

error_reporting(-1);

$credit_sum = 10000;
$percent = 0.10;
$age = 16;
$years = 0;

while ($credit_sum <= 1000000)
{
    $credit_sum = $credit_sum + ($credit_sum * $percent);
    $age++;
	$years++;
    echo "Сумма на {$years}й год: " . sprintf("%.2f", $credit_sum) . " рублей, возраст вкладчика {$age} лет.\n";
}
