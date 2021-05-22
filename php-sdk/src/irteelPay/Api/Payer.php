<?php
namespace irteelPay\Api;

use irteelPay\Common\irteelPayModel;

/**
 * Class Payer
 * @property string paymentMethod
 *
 */
class Payer extends irteelPayModel
{

    /**
     * Valid Values: ["irteelpay"]
     * method will be like irteelpay, paypal, stripe etc
     * @param  string  $method
     * @return $this
     */
    public function setPaymentMethod($method)
    {
        $this->paymentMethod = $method;
        return $this;
    }

    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

}
