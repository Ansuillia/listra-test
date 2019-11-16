# Instruções

Para rodar o projeto:

1) Rodar os comandos:
   - ``composer install``
   - ``npm i``
2) Configurar o arquivo .env para conectar ao banco de dados que será utilizado
3) Há duas formas de popular o banco:
   1) Utilizando o arquivo listra_cars.sql que está no caminho database/sql/cars
        - Esse arquivo contém a criação da tabela e inserção de dados de exemplo. O banco deve ter sido criado para que funcione.
    2) Utilizando o seed.
        - Para isso deve-se rodar o comando: ``php artisan db:seed``

Esse projeto contém as páginas vue embarcadas.
Para usar o aplicativo Vue separado acesse a página do projeto no [neste link](https://github.com/Ansuillia/listra-test-app-vue)
