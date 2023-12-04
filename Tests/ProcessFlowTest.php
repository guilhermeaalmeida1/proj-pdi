<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use src\ProcessFlow;

class ProcessFlowTest extends TestCase
{
    #[DataProvider('payment')]
    public function testProcessFlow($payment)
    {
        $inst = new ProcessFlow();
        $paymentResult = $inst->flow($payment);

        $this->assertArrayHasKey('forma_pagamento', $paymentResult);
    }

    #[DataProvider('payment')]
    public function testPaymentType($payment, $paymentType)
    {
        $inst = new ProcessFlow();
        $paymentResult = $inst->flow($payment);

        $this->assertEquals($paymentType, $paymentResult['forma_pagamento']);
    }
    public static function payment(): array {
        return [
            'boleto' => [
                [
                    'nome' => '',
                    'cpf' => '',
                    'email' => '',
                    'valor' => '',
                    'data_pagamento' => '',
                    'data_vencimento' => '',
                    'forma_pagamento' => 'boleto',
                ],
                'paymentType' => 'boleto'
            ],
            'ewallet' => [
                [
                    'nome' => '',
                    'cpf' => '',
                    'email' => '',
                    'valor' => '',
                    'data_pagamento' => '',
                    'data_vencimento' => '',
                    'forma_pagamento' => 'ewallet',
                ],
                'paymentType' => 'ewallet'
            ],
            'credit' => [
                [
                    'nome' => '',
                    'cpf' => '',
                    'email' => '',
                    'valor' => '',
                    'data_pagamento' => '',
                    'data_vencimento' => '',
                    'forma_pagamento' => 'credit',
                ],
                'paymentType' => 'credit'
            ]
        ];
    }
}
