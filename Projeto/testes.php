<?php

use PHP\DesignPattern\CalculadoraDeDescontos;
use PHP\DesignPattern\CalculadoraDeImpostos;
use PHP\DesignPattern\Impostos\{Icms, Iss};
use PHP\DesignPattern\Orcamento;

require 'vendor/autoload.php';

/*$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orçamento->valor = 100;

echo $calculadora->calcula($orcamento, new Iss());
*/
$calculadora = new CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 200;
$orcamento->quantidadeItens = 5;

$calculadora->calculaDescontos($orcamento);