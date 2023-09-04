<?php
// https://adventofcode.com/2022/day/1
// PHP functionality used
// 1. PHP file I/O
// 2. Splitting strings
// 3. Classes
// 4. `use` directives
// 5. Basic unit testing with PHPUnit


require "./Ledger.php";

// file content -> string
$inputStr = file_get_contents("./inputs.txt");
$ledger = new Ledger($inputStr);
startMainMenu($ledger);


function startMainMenu(Ledger $ledger)
{
    echo "// Ajpreet Singh\n" .
        "// Advent of Code, 2022\n" .
        "// Day 1\n" .
        "\n" .
        "Total elves: {$ledger->getTotalElves()}\n" .
        "Total calories: {$ledger->getTotalCalories()}\n" .
        "MVP number: {$ledger->getMvp()['number']}\n" .
        "MVP total calories: {$ledger->getMvp()['calories']}\n";
}