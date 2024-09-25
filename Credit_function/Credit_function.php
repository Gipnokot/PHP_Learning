<?php

error_reporting(-1);

function calculateCredit($creditSum, $monthlyPayment, $percent, $servicePayment, $openingFee = 0) {
    $totalSum = $creditSum + $openingFee;
    $totalPaid = 0;

    while ($totalSum > 0) {
        $totalSum = ($totalSum * $percent) + $servicePayment - $monthlyPayment;
        $totalPaid += $monthlyPayment;

        if ($totalSum < 0) {
            $totalPaid += $totalSum; // Добавляем остаток, если он меньше ежемесячного платежа
        }
    }

    return $totalPaid;
}

$creditSum = 39999;
$monthlyPayment = 5000;

$homoCredit = calculateCredit($creditSum, $monthlyPayment, 1.04, 500);
$softbank = calculateCredit($creditSum, $monthlyPayment, 1.03, 1000);
$strawberryBank = calculateCredit($creditSum, $monthlyPayment, 1.02, 0, 7777);

echo "homoCredit: " . sprintf("%.2f", $homoCredit) . " руб. \n";
echo "softbank: " . sprintf("%.2f", $softbank) . " руб. \n";
echo "strawberryBank: " . sprintf("%.2f", $strawberryBank) . " руб. \n";
