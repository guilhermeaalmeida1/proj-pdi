<?php

declare(strict_types=1);

namespace src\Payment;

class PaymentInstance
{
    public static function getPaymentMethod(string $method): PaymentoMethod
    {
        return match ($method){
            'credit' => new CreditCard(),
            'ewallet' => new EWallet(),
            default => new Boleto(),
        };
    }
}