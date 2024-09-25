<?php

error_reporting(-1);

$code = array(
    'а' => '1',
    'б' => '2',
    'в' => '3',
    'г' => '4',
    'д' => '5',
    'е' => '6',
    'ё' => '7',
    'ж' => '8',
    'з' => '9',
    'и' => '0',
    'й' => '#'
);

$text = 'абвгдежзийклмнопрстуфхцчшщъыьэюя';
$encodedText = strtr($text, $code);

echo "Оригинал: {$text}\n";
echo "Шифровка: {$encodedText}\n";

$decode = array_flip($code);
$decodedText = strtr($encodedText, $decode);
echo "Расшифровка: {$decodedText}\n";
?>
