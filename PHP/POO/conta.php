<?php

function criarConta(string $cpf, string $nomeTitualar, float $saldo): array {
    return [
        $cpf => [
            'titular' => $nomeTitualar,
            'saldo' => $saldo,
        ]
        ];
}