<!-- filter even number -->

<?php

// here is funciton with arrow in php
$function_filter = fn($array) => array_filter($array, fn($arr_index) => !($arr_index & 1));

$arr = [12, 2, 3, 12, 13, 2];

var_dump($arr_filter = $function_filter($arr));

?>