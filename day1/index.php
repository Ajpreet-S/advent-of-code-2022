<?php
// PHP functionality used
//// 1. PHP file I/O
//// 2.
//

// file content -> string
$input = file_get_contents("./inputs.txt");

// string -> array
$input = explode("\n\n", $input);
for ($i=0, $arr_len=count($input); $i<$arr_len; $i++) {
    $input[$i] = explode("\n", $input[$i]);
}

var_dump($input);