<?php

namespace Study\Design\Taxes;

use Study\Design\Budget;

/**
 *
 */
interface TaxInterface
{
    /**
     * @param Budget $budget
     * @return float
     */
    public function calculationTax(Budget $budget): float;
}
