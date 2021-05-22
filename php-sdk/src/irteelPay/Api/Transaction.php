<?php namespace irteelPay\Api;

use irteelPay\Common\irteelPayModel;

/**
 * Class Transaction
 * @property \irteelPay\Api\Amount amount
 *
 */

class Transaction extends irteelPayModel
{

    /**
     * @param \irteelPay\Api\Amount $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public function getAmount()
    {
        return $this->amount;
    }
}