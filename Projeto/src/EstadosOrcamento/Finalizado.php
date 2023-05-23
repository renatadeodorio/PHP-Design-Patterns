<?php

namespace PHP\DesignPattern\EstadosOrcamento;

use PHP\DesignPattern\Orcamento;

class Finalizado extends EstadosOrcamento
{
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    throw new \DomainException( message: 'Um orçamento finalizado não pode receber desconto!');
  }
  
}