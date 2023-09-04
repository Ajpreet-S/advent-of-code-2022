<?php

class Ledger
{
    public function __construct(array $inventory)
    {
        $this->$inventory = $inventory;
    }
}