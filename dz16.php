<?php
$keys = ['model', 'speed', 'doors', 'year'];
$bmw = ['x5', 120, 5, 2015];
$opel = ['kadet', 100, 5, 1986];
$toyota = ['rav4', 110, 5, 2005];
$name = ['bmw', 'opel', 'toyota'];
$array1 = array_combine($keys, $bmw);
$array2 = array_combine($keys, $opel);
$array3 = array_combine($keys, $toyota);
$array = [$array1, $array2, $array3];
foreach ($array as $key => $value) {
    echo " CAR " . $name[$key];
    echo PHP_EOL;
    echo join(' ', $value);
    echo PHP_EOL;
}
