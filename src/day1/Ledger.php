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