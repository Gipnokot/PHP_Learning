<?php

error_reporting(-1);

$text = "А роза упала на лапу Азора";
$result = 'палиндром';

$textWithoutSpaces = str_replace(' ', '', $text);
$textLowercase = strtolower($textWithoutSpaces);

$length = strlen($textLowercase);
$halfLength = floor($length / 2);

for ($i = 0; $i < $halfLength; $i++) {
    if (substr($textLowercase, $i, 1) !== substr($textLowercase, $length - $i - 1, 1)) {
        $result = 'не палиндром';
        break;
    }
}

echo "Результат: {$result}\n";
