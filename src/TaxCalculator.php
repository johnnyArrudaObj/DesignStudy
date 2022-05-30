<?php

namespace Study\Design;

use Study\Design\Taxes\TaxInterface;

/**
 * Simple study application for Strategy Design
 */
class TaxCalculator
{
    /**
     * @param Budget $budget
     * @param TaxInterface $tax
     * @return float
     */
    public function calculation(Budget $budget, TaxInterface $tax): float
    {
        return $tax->calculationTax($budget);
    }
}
