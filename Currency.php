<?php

/**
 * Copyright (c) 2010-2016 Romain Cottard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eureka\Component\Currency;

/**
 * Currency class
 *
 * @author  Romain Cottard
 * @version 1.0.0
 */
class Currency
{
    /**
     * @var float $amount
     */
    protected $amount = 0.0;

    /**
     * @var string $currency
     */
    protected $currency = '€';

    /**
     * Currency constructor.
     *
     * @param float $amount
     * @param string $currency
     */
    public function __construct($amount, $currency = '€')
    {
        $this->amount   = $amount;
        $this->currency = $currency;
    }

    /**
     * To string magic method.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->format();
    }

    /**
     * French number formating.
     *
     * @return mixed
     */
    public function format()
    {
       return number_format($this->amount, 2, ',', ' ') . $this->currency;
    }
}