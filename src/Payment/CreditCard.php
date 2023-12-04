<?php

declare(strict_types=1);

namespace src\Payment;

class CreditCard implements PaymentoMethod
{

    public function getPaymentMethod(array $payment): array
    {
        return $payment;
    }
}