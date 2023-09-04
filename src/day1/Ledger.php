<?php

class Ledger
{
    private $totalElves = 0;
    private $totalCalories = 0;
    private $mvp = [
        'number' => null,
        'calories' => 0,
    ];

    public function __construct(string $dataStr)
    {
        $data = $this->parseInputData($dataStr);
        $data = $this->sortData($data);
        var_dump($data);
        foreach ($data as $elfNumber => $inventory) {
            // track total elves
            $this->totalElves++;

            // track total calories
            $calories = 0;
            foreach ($inventory as $foodItemCalories) {
                $calories += $foodItemCalories;
            }
            $this->totalCalories += $calories;

            // track mvp
            if ($calories > $this->mvp['calories']) {
                $this->mvp['calories'] = $calories;
                $this->mvp['number'] = $elfNumber;
            }
        }

    }

    // TODO: Make the function private. Then, learn how to create unit tests for private class functions.
    public function parseInputData(string $dataStr): array
    {
        // convert string to array
        $data = explode("\n\n", $dataStr);

        // parse the array
        foreach ($data as &$inventory) {
            $inventory = explode("\n", $inventory);
            foreach ($inventory as &$foodCalories) {
                $foodCalories = (int) $foodCalories;
            }
        }

        return $data;
    }

    // TODO: Make this algorithm work
    public function sortData(array $data): array
    {
        // some sorting algorithm
        for ($i = 0, $j = count($data); $i < $j; $i++) {
            for ($k = $i, $l = count($data) - 1; $k < $l; $k++) {
                // Check if we need to swap
                $left = &$data[$k];
                $right = &$data[$k + 1];

                // Is left less than right?
                if ($left < $right) {
                    // Yes
                    // We don't need sort this element
                    break;
                }

                // No
                // Swap left and right
                $temp = $left;
                $left = $right;
                $right = $temp;
            }
        }

        return $data;
    }

    public function getTotalElves(): int
    {
        return $this->totalElves;
    }

    /**
     * @return int|mixed
     */
    public function getTotalCalories(): mixed
    {
        return $this->totalCalories;
    }

    public function getMvp(): array
    {
        return $this->mvp;
    }
}