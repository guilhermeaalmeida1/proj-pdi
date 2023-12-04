<?php

declare(strict_types=1);

namespace src\Payment;

class Boleto implements PaymentoMethod
{

    public function getPaymentMethod(array $payment): array
    {
        return $payment;
    }
}