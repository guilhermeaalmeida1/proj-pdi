<?php

namespace src\Payment;

interface PaymentoMethod
{
    public function getPaymentMethod(array $payment): array;
}