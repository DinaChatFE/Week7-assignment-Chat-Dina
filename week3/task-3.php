<?php

// use reduce to implement sumation
$arr = [12, 2, 2, 1, 2, 12];
var_dump(array_reduce($arr, fn($temp, $amount) => $temp += $amount));
