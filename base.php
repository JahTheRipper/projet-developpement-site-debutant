<?php

// Integer // Int 32
// -2 147 483 647 --> 2 147 483 647
$int = 1;
$int = 8;
$int = 12;
$int = -8;
$int = 0;

// Float
$float = 2.3;
$float = 15852.54515451;
$float = -18.0;

// Char
$char = 'a';
$char = '&';
$char = '8';
$char = '-';

// String
$string = 'L\'amour \\ :)';
$string = 'video1.mkv, video2.mkv, video3.mkv';


// null
$null = null;

// Boolean // Bool ==> 1bit ==> 0 ou 1
$bool = true;
$bool = false;

// array
$array = [];
$array = [
    'video1.mkv',
    'video2.mkv',
    'video3.mkv',
    true,
    'dzuhauhaidgbaz ',
];
echo $array[3]; // ==> true
echo $array[4]; // ==> dzuhauhaidgbaz

$array = [
    'ma_clé' => 5,
    'voila' => 'enfiehzuehfzfe,',
    12 => 'ok',
    27 => 8,
];
echo $array[27]; // ==> 8
echo $array['ma_clé']; // => 5

//Int
$myVar = 8;
// array
$myVar = [];
// string
$myVar = 'Salut';




$int = 8 + 23;
$firstNumber = 8;
$secondNumber = 23;
$firstNumber = $firstNumber + 1;
$firstNumber += 1;
$firstNumber++;
++$firstNumber;

$result = add($firstNumber, $secondNumber);
$result = $firstNumber - $secondNumber;
$result = $firstNumber * $secondNumber;
$result = $firstNumber / $secondNumber; // 2.154874887484
//modulo
$result = $firstNumber % $secondNumber; // 1


$username = 'JahTheRipper';

echo 'Salut '.$username.' !';

function add (int $a, int $b): int {
    return $a + $b;
}

function divide (int $a, int $b): ?int {
    if ($b === 0) {
        return null;
    }
    return $a / $b;
}

function substract(int $a, int $b): ?int {
    if ($b > $a || ($a < 0 && $b < 0)) {
        return null;
    }
    return $a - $b;
}

$additionResult = add(5, 12);

for ($i = 8; $i < 10; $i++) {
    echo $i;
}
