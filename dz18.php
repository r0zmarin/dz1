<?php
$str = ("12345 6789 abcdefg");
echo $str;
$arr = explode(' ', $str);
$i = count($arr);
$j = 0;
$str2 = [];
while ($i >= 0) {
    $str2[$j] = ($arr[$i]);
    $j++;
    $i--;
}
echo "<pre>";
echo '$str2=' . join('|', $str2);

