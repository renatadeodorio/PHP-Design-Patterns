<?php

use PHP\DesignPattern\CalculadoraDeImpostos;
use PHP\DesignPattern\Impostos\Icms;
use PHP\DesignPattern\Impostos\Iss;
use PHP\DesignPattern\Orcamento;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orçamento->valor = 100;

echo $calculadora->calcula($orcamento, new Iss());
