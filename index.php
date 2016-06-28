<?php
$php1601 = 5;
function myFunction($a, $b, $c) {

$d = $b * $b - 4 * $a * $c;

if ($d < 0) {
return '';
} else {
$x1 = (-$b + sqrt($d)) / (2 * $a);
$x2 = (-$b - sqrt($d)) / (2 * $a);
return $x1.':'.$x2;
}

}
var_dump(myFunction(1, 2, 1));
?> 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
