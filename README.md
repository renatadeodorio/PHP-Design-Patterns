# PHP-Design-Patterns

<h2>Passo a Passo:</h2>

1-Instalei Grenciador de Dependências-> Composer.
  
  1.1-Criei um sistema que a partir de um orçamento calcula imposto, adiciona descontos e faz alguns cálculos. 
  
  1.2-Criei classe de orçamento. Dentro de uma pasta src, criei uma classe chamada Orcamento, e o name space será PHP\DesignPattern. 
  E estará dentro de uma pasta chamada src.
  
  1.3-Criei essa classe e tudo que ela terá será uma propriedade que vai ser um float valor.
  
  1.4-Configurei autoloader, criei o composer.json e defini um autoload, utilizei a psr-4, e o name space é PHP\DesignPattern.
  
  1.5-Com autoloader configurado, executei composer dump-autoload.

2-Criei uma calculadora de impostos que calcula o imposto sobre um orçamento. Ela recebe o orçamento e devolve o valor desse imposto, e retorna um float. Usei para fazer as contas operadores normais
 
 3-Utilizando Padrão Strategy criando uma classe para cada imposto.
 
 4-Criei uma nova classe CalculadoraDeDescontos. CalculaDescontos para algum orçamento e devolve esse valor dos descontos.
