<?php
$a = 'b';
$$a = "c";
$$b = "d";
$$c = "f";
echo "$a, $b, $c, $d <br> $a, ${$a}, ${${$a}} ,${${${$a}}} <br> $a, ${$a}, ${$b} ,${$c}";