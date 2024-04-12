#Anotações

##Comandos de Migration
- Para criar a migration : php artisan make:migration create_series_table
- Para realizar a migration: php artisan migrate

- Mass assignment
    - Usando o mass assignment você poderá passar todos os dados ao mesmo tempo, mas para poder usa-lo o laravel obriga que você insira a propriedade fillable dentro da model para que passe apenas os dados desejados.

    - o fillable é um array onde você irá colocar os dados que deseja que sejam salvo dentro do banco de dados.

OBS: Criando rotas usando resources, ele vai criar todas as rotas possiveis, mas quando não queremos usar todas as rotas podemos informar as rotas que queremos usar usando os metodos except ou only.

Obs: Em html so podemos usar os verbos http get e post
obs: Quando usamos o resources ele usa o primeiro parametro no plural e o segundo no singular em ingles

Criando uma models ja com uma migration
php artisan make:model nomeDaModel -m

CRiando relacionamento de entidades com o eloquent

O eloquent não usa um mapeamento de dados.

Para criar um relacionamento de entidades precisamos criar um metodo de relacionamento para realizar esse relacionamento dentro da aplicação.

podemos criar escopos globais e locais para fazer determinada ação. por ex podemos criar um escopo global para quando formos realizar uma busca o resultado dela ser em ordem alfabetica.

Deadlock - Pesquisar.

Repository: É uma classe responsavel por cuidar de toda a logica voltada para banco de dados

