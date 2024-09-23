//Решение задачи с кубиками

<?php

error_reporting(-1);

$playerDice1 = mt_rand(1, 6); // первый бросок игрока
$playerDice2 = mt_rand(1, 6); // второй бросок игрока

$compDice1 = mt_rand(1, 6); // броски компьютера
$compDice2 = mt_rand(1, 6);

echo "У игрока выпало {$playerDice1} и {$playerDice2} \n";
echo "У компьютера выпало {$compDice1} и {$compDice2}\n";

$playerSum = ($playerDice1 + $playerDice2);
$compSum = ($compDice1 + $compDice2);

if (($playerDice1 == $playerDice2) && ($compDice1 == $compDice2)) {
    echo "Ничья!";
    exit();
}

elseif (($playerDice1 + $playerDice2) > ($compDice1 + $compDice2)) {
    echo "Выиграл игрок!";
}

else {
    echo "Выиграл компьютер!";
}
