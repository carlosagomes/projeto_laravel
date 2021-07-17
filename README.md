

## Projeto desenvolvido em Laravel com Front separado

Foi utilizado Laravel, Boostrap, Jquery, SweetAlert, ViaCEP, MYSQL para execução do projeto.

O Front e seprado assim todas as chamadas senda via AJAX retornadas pela API.

Passo para execução do projeto, baixar o mesmo em local já com seu ambiente configurado.

1 - Dentro da pasta do  projeto deve se verificar as permissões de algumas pastas e dar permissão total, usando o seguinte comando.
```
sudo su chmod -R 777 /storage
sudo su chmod -R 777 /bootstrap
```
2 - Dentro da pasta do projeto deve se rodar o seguinte comando.
```
composer install
```
3 - Concluído o processo de atualização e download dos pacotes do composer, você deve executar as MIGRATIONS com os SEEDS (dados) criando-os no banco de dados MYSQL. Para isso execute o seguinte comando :
```
php artisan migrate
```

4 - Após isso verificar os dados no .env do projeto para rodar o mesmo.


5 - O Front end desse projeto ficou seprado na pasta public.

Exemplo de URL : http://localhost:8080/front/index.php

