<?php

namespace PHP\DesignPattern\AcoesAoGerarPedido;

use PHP\DesignPattern\Pedido;

class CriarPedidoNoBanco
{
  public function executaAcao(Pedido $pedido): void
  {
    echo "Salvando pedido  no banco de dados"; 
  }

}