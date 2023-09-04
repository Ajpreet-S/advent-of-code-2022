<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__.'/../Ledger.php';

class LedgerTest extends TestCase
{

    public function test__construct()
    {
        $this->assertEquals(200, 200);
    }

    public function testParseInputData()
    {
        $inputFileLocation = '/testInputs.txt';
        $result = new Ledger($inputFileLocation);

        $result = $result->parseInputData($inputFileLocation);
        $expectedResult = [
            [
                100,
                200,
            ],
            [
                300,
                400,
            ],
            [
                500,
                600,
            ],
        ];

        $this->assertEquals($expectedResult, $result);
    }
}
