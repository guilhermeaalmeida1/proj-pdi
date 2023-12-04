<?php

declare(strict_types=1);

namespace src;

use src\Payment\PaymentInstance;
use src\Payment\PaymentoMethod;

class ProcessFlow
{
    public function __construct()
    {
    }

    public function flow(array $payment): array
    {
        $pay = PaymentInstance::getPaymentMethod($payment['forma_pagamento']);

        return $this->getPayment($pay, $payment);
    }

    public function getPayment(PaymentoMethod $paymentoMethod, array $payment): array
    {
        return $paymentoMethod->getPaymentMethod($payment);
    }

}
