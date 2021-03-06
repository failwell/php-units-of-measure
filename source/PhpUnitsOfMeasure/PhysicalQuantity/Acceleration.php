<?php
namespace PhpUnitsOfMeasure\PhysicalQuantity;

use \PhpUnitsOfMeasure\PhysicalQuantity;
use \PhpUnitsOfMeasure\UnitOfMeasure;

class Acceleration extends PhysicalQuantity
{
    /**
     * Configure all the standard units of measure
     * to which this quantity can be converted.
     *
     * @return void
     */
    public function __construct($value, $unit)
    {
        parent::__construct($value, $unit);

        // meters per second squared
        $newUnit = new UnitOfMeasure(
            'm/s^2',
            function ($x) {
                return $x;
            },
            function ($x) {
                return $x;
            },
            array(
                'm/s²',
                'meter per second squared',
                'meters per second squared',
                'metre per second squared',
                'metres per second squared'
            )
        );
        $this->registerUnitOfMeasure($newUnit);
    }
}
