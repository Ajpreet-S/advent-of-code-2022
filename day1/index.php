<?php
// https://adventofcode.com/2022/day/1
// PHP functionality used
// 1. PHP file I/O
// 2. Splitting strings
// 3. Classes
// 4. `use` directives
// 5. Basic unit testing with PHPUnit


use Ledger;

// file content -> string
$input = file_get_contents("./inputs.txt");

// array
$input = explode("\n\n", $input);
for ($i=0, $arr_len=count($input); $i<$arr_len; $i++) {
    $input[$i] = explode("\n", $input[$i]);
}

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

// data structure used to track information on the elves and food
$data = [
    'totalElves' => 0,
    'totalCalories' => 0,
    'inventories' => [],
    'mvp' => [
        'elfID' => null,
        'inventory' => [],
        'calories' => 0,
    ],
];

foreach ($input as $i => $inventory) {
    // count elf
    $data['totalElves']++;

    // count elf's calories
    $calories = 0;
    foreach ($inventory as $foodCalories) {
        $calories += $foodCalories;

    }

    // update data
    $data['totalCalories'] += $calories;
    $data['inventories'][] = $calories;

    // update mvp data
    if ($calories > $data['mvp']['calories']) {
        $data['mvp']['calories'] = $calories;
        $data['mvp']['elfID'] = $i;


        foreach ($inventory as $food) {
            $data['mvp']['inventory'][] = $food;
        }
    }

}