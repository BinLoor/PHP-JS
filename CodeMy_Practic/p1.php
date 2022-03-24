<?php
function discriminant($a, $b, $c) {
$d = pow($b, 2) - 4 * $a * $c;
return $d;
}

function root_1($a, $b, $d) {
$x_1 = (-$b + sqrt($d))/(2 * $a);
return $x_1;
}

function root_2($a, $b, $d) {
$x_1 = (-$b - sqrt($d))/(2 * $a);
return $x_1;
}

if(!empty($_REQUEST)) {
if(count($_REQUEST) == 3 and $_REQUEST['a'] != 0 and $_REQUEST['b'] != 0 and $_REQUEST['c'] !=
0) {
$discriminant = discriminant($_REQUEST['a'], $_REQUEST['b'], $_REQUEST['c']);
if($discriminant > 0) {
echo "Корень уравнения 1: ".root_1($_REQUEST['a'], $_REQUEST['b'], $discriminant).'<br>';
echo "Корень уравнения 2: ".root_2($_REQUEST['a'], $_REQUEST['b'], $discriminant);
}

if($discriminant == 0) {
echo "Корень уравнения: ".root_1($_REQUEST['a'], $_REQUEST['b'], $discriminant);
}

if($discriminant < 0) {
echo "Уравнение не имеет корней.";
}}

else echo "Поле не может быть пустым или равным нулю!";
}
?> 
