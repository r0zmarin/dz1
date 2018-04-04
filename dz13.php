<?php
define('Pi', 3.14);
    echo 'Пи существует: Пи = '. Pi;
    echo PHP_EOL;
define('Pi', 300);
if (Pi<10){
    echo 'константа не изменилась: Пи = '.Pi;
}
