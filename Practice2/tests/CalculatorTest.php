<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 24/10/2018
 * Time: 23:43
 */

require __DIR__ . "/../src/Calculator.php";
use PHPUnit\Framework\TestCase;

class CalculatorTest extends Calculator1
{
    public function testCalculateAdd()
    {
        $firstOperand = 1;
        $secondOperand = 1;
        $operator = parent::ADDITION;

        $expected = 2;

        $calculator = new Calculator1();
        $result = $calculator->calculate($firstOperand, $secondOperand, $operator);
//        $this->assertEquals($expected, $result);
        return $result;
    }
}
$test = new CalculatorTest();
echo $test->testCalculateAdd();