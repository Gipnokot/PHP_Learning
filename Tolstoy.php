<?php

error_reporting(-1);

$sword1 = array('Чудесных', 'Суровых', 'Занятных', 'Внезапных');
$sword2 = array('слов', 'зим', 'глаз', 'дней', 'лет', 'мир', 'взор');
$sword3 = array('прикосновений', 'поползновений', 'судьбы явлений', 'сухие листья', 'долины края', 'замены нету', 'морщины смерти', 'сухая юность', 'навек исчезнув');
$sword4 = array('обретаю', 'понимаю', 'начертаю', 'вынимаю', 'умираю', 'замерзаю', 'выделяю', 'закрываю', 'оставляю', 'смысл жизни');
$sword5 = array('очертания', 'безысходность', 'начертанья', 'вирус смерти', 'радость мира');

$swords = array($sword1, $sword2, $sword3, $sword4, $sword5);

for ($i = 1; $i <= 2; $i++) {
    $phrase1 = $swords[0][array_rand($swords[0])] . ' ' . $swords[1][array_rand($swords[1])] . ' ' . $swords[2][array_rand($swords[2])];
    echo "> {$phrase1}\n";
}
$phrase2 = 'Я ' . $swords[3][array_rand($swords[3])] . ' ' . $swords[4][array_rand($swords[4])];


echo "> {$phrase2}\n";
