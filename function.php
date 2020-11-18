<?php

?>
<html>
<head>
    <style>
        body {
            font-size: 30px;
        }
    </style>
</head>
<body>
<p style="font-size: 30px;">
<?php

// Afficher tous les nombres pairs de 0 à 20 (inclus)

for ( $i = 0; $i <= 20; $i++) {
    if ($i % 2 === 1){
        echo $i . '<br />';
    }
}

echo '<br /><hr><br />';

$test = 'abcdefghijklziuahez  gazdgza a adhdhzau gazbdza auzhfu';
//$split = \str_split($test);
//$counter = 0;
$searched = 'a';
$counter = \substr_count($test, $searched);
echo ' Il y a ' . $counter . ' fois ' . $searched . ' dans l\'enchainement. ';

//foreach ($split as $value) {
//    if (\in_array($value, $searched)) {
//        $counter++;
//    }
//}
//echo ' Il y a ' . $counter . ' fois [' . \implode(', ou ', $searched) . '] dans l\'enchainement. ';
?>
</p>
</body>
</html>


