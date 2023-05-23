<?php

require_once 'vendor/autoload.php';

use PHP\DesignPattern\{Orcamento, Pedido};

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new \PHP\DesignPattern\GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedido->execute();