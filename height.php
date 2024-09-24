<?php

error_reporting(-1);

$vasyaHeight = 169;

$classmates = array(
		'Антон' => 172,
		'Семен' => 165,
		'Лена' => 189,
		'Иван' => 171,
		'Петр' => 182,
		'Сидор' => 176,
		'Аня' => 180,
		'Таня' => 179,
		'Маня' => 171
);

$number = 0;

foreach ( $classmates as $name => $height )
{
	echo "Имя: {$name}, рост: {$height} см.\n";
	if ($height > $vasyaHeight) 
	{
		$number++;
	}
}

echo "В классе: {$number} человек выше Васи\n";
