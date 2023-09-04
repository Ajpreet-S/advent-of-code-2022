<?php
// https://adventofcode.com/2022/day/1
// PHP functionality used
//// 1. PHP file I/O
//// 2.
//

// file content -> string
$input = file_get_contents("./inputs.txt");

// array
$input = explode("\n\n", $input);
for ($i=0, $arr_len=count($input); $i<$arr_len; $i++) {
    $input[$i] = explode("\n", $input[$i]);
}

var_dump($input);

/*
 * @var array $input An array of elves, where each elf is an associative array with the caloric value of foods in their possession
 *
 * Example:
 * [
 *     [
 *          100,
 *          200,
 *          150,
 *     ],
 *     [
 *
 *          500,
 *          750,
 *          1000,
 *     ],
 */
foreach ($input as $elf_food_inventory) {
    foreach ($elf_food_inventory as $food_caloric_value) {
        $food_caloric_value = (int) $food_caloric_value;
    }
}