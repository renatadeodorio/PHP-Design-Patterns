<?php

namespace PHP\DesignPattern\AcoesAoGerarPedido;

use PHP\DesignPattern\Pedido;

class EnviarPedidoPorEmail
{
  public function executaAcao(Pedido $pedido): void
  {
    echo "Enviando e-mail de pedido gerado"; 
  }
}