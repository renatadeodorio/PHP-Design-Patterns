<?php

namespace PHP\DesignPattern\Impostos;

use PHP\DesignPattern\Orcamento;

class Iss implements Imposto
{
  public function calculaImposto(Orcamento $orcamento): float
  {
    return $orcamento->valor * 0.06;
  }
}