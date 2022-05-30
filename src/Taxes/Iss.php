<?php

namespace Study\Design\Taxes;

use Study\Design\Budget;

/**
 *
 */
class Iss implements TaxInterface
{
    /**
     * @param Budget $budget
     * @return float
     */
    public function calculationTax(Budget $budget): float
    {
        return $budget->price * 0.1;
    }
}
