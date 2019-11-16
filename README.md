# Teste para Listra


Objetivo: Este teste possui como objetivo simular o financiamento de um veículo no qual o cliente possui interesse.

Para que esse requisito seja atendido, deverá ser criado um banco de dados, com uma tabela de veículos, no qual ela deverá armazenar um código, descrição e valor de um carro.

Para fins de testes, esta tabela deverá ser populada com alguns registros.

Para esta aplicação será necessário a utilização do framework Laravel ou CakePHP para o backend, VueJS para o frontend e banco de dados MySQL.

Requisitos do Sistema
1)	O sistema deve permitir que o cliente selecione qual veículo deseja simular o financiamento.

2)	Ao selecionar o item, o sistema deve exibir o valor do veículo selecionado e um campo para que ele coloque o valor de entrada que deseja dar no financiamento. 
    -	O valor de entrada, pode ser qualquer valor inferior ao veículo que esteja sendo simulado

3)	Ao clicar em simular o sistema deve exibir os valores das parcelas simuladas.
    - A fórmula para calcular as parcelas é: (valor do carro - valor da entrada) / números de parcelas.
    - O número de parcelas será: 6, 12 e 48

## Para rodar o sistema:

1)  Mover para a pasta do projeto e rodar os seguintes comandos:
    -  ``composer install``
    -  ``npm install``
    -  ``php artisan serve``
