<?php

use PHPUnit\Framework\TestCase;
use Study\Design\Budget;
use Study\Design\TaxCalculator;
use Study\Design\Taxes\Icms;
use Study\Design\Taxes\Iss;

class TaxCalculatorTest extends TestCase
{
    public function test_ShouldCalculationTaxes_WhenIcmsTax(): void
    {
        $calculator = new TaxCalculator();

        $budget = new Budget();
        $budget->price = 100;

        self::assertEquals(6, $calculator->calculation($budget, new Icms()));
    }

    public function test_ShouldCalculationTaxes_WhenIssTax(): void
    {
        $calculator = new TaxCalculator();

        $budget = new Budget();
        $budget->price = 100;

        self::assertEquals(10, $calculator->calculation($budget, new Iss()));
    }
}
