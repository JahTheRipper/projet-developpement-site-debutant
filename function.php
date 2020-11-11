<?php

// Afficher tous les nombres pairs de 0 à 20 (inclus)

for ( $i = 0; $i <= 20; $i++) {
    if ($i % 2 === 1){
        echo $i . '<br />';
    }
}

$test = 'abcdefghijkl';
$split = \str_split($test);
foreach ($split as $value) {

}


