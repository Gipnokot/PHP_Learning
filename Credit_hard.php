<?php

error_reporting(-1);

$creditSum = 40000; // сумма кредита
$percent = 1.03; // процент по кредиту
$servicePayment = 1000; // ежемесячная плата за обслуживание
$monthlyPayment = 5000; // сумма погашения долга в месяц кредитором
$paymentTotal = 0; // всего выплачено

for ($month = 1; $month <= 20; $month++) 
{
    // Начисление процентов и комиссии
    $creditSum = $creditSum * $percent + $servicePayment;

    // Проверка, сколько осталось долга
    if ($creditSum < $monthlyPayment) 
	{
        $paymentTotal += $creditSum;
        $creditSum = 0;
        echo "{$month} месяц спустя: долг = " . sprintf("%.2f", $creditSum) . " руб, выплачено всего " . sprintf("%.2f", $paymentTotal) . " руб. \n";
        echo "С меня хватит!\n";
        break;
    }

    // Выплата долга
    $creditSum -= $monthlyPayment;
    $paymentTotal += $monthlyPayment;
    echo "{$month} месяц спустя: долг = " . sprintf("%.2f", $creditSum) . " руб, выплачено всего " . sprintf("%.2f", $paymentTotal) . " руб. \n";

    if ($creditSum < 0) 
	{
        echo "С меня хватит!\n";
        break;
    }
}
