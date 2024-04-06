#Anotações

##Comandos de Migration
- Para criar a migration : php artisan make:migration create_series_table
- Para realizar a migration: php artisan migrate

- Mass assignment
    - Usando o mass assignment você poderá passar todos os dados ao mesmo tempo, mas para poder usa-lo o laravel obriga que você insira a propriedade fillable dentro da model para que passe apenas os dados desejados.

    - o fillable é um array onde você irá colocar os dados que deseja que sejam salvo dentro do banco de dados.

