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
$string = '';


// null
$null = null;

// Boolean // Bool ==> 1bit ==> 0 ou 1
$bool = true;
$bool = false;

// array
$array = [];
$array = [
    8,
    'test',
    null,
    true,
    'dzuhauhaidgbaz ',
];

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
