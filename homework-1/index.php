<?php
//Дії з числами
$d = 7;
$d2 = 3;
$d3 = 7.15;
$d4 = 25;
var_dump($d/$d2). "\n";
var_dump(floor($d/$d3)). "\n";
var_dump(sqrt($d4)). "\n";
//Дії зі строками
$c = 'Десять негритят пошли купаться в море';
$c = explode(" ", $c);
echo $c[3];
$c1 = 'Десять негритят пошли купаться в море';
echo mb_substr($c1, 16, 1);
$c2 = 'Десять негритят пошли купаться в море';
$c3 = ucwords($c2);
echo $c3;
$c4 = 'Десять негритят пошли купаться в море';
var_dump(mb_strlen($c4));
//Дії з логіческими даними
$r = true;
$r1 = 1;
$r2 = false;
$r3 = 0;
if ($r==$r1) {
    echo 'right';
} else {
    echo 'wrong';
}
if ($r2==$r3) {
    echo 'right';
} else {
    echo 'wrong';
}
$e = 'три';
$e1 = 'three';
var_dump(mb_strlen($e1));
var_dump(strlen($e));
$w = (125*13+7);
$w1 = (223+28*2);
if ($w>=$w1) {
    echo '1 число больше 2-го';
} else {
    echo '1 число меньше 2-го';
}