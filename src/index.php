<?php

declare(strict_types=1);

use src\ProcessFlow;

require_once __DIR__ . '/../vendor/autoload.php';

$pagamentos = [
    [
        'nome' => '',
        'cpf' => '',
        'email' => '',
        'valor' => '',
        'data_pagamento' => '',
        'data_vencimento' => '',
        'forma_pagamento' => 'boleto',
    ],
];

foreach ($pagamentos as $pagamento) {
    $inst = new ProcessFlow();

    var_dump($inst->flow($pagamento));
}

exit;
