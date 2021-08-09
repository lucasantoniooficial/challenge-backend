# Challeng Back-end
CRUD Completo de carros e marcas, usando Laravel 8 e Livewire 2.


# Para teste
Foi criado factory para gerar dados fakes para testes.

Antes do teste precisa rodar o comando: `composer install`

Depois precisa fazer a copia do `.env.example` para `.env`

Depois precisa fazer a conexão com banco de dados no `.env`, informando os dados no `DB_HOST, DB_USERNAME, DB_PASSWORD`.

Após fazer a conexão precisa subir as tabelas usando as migrations usando o comando: `php artisan migrate --seed`.

O `--seed` é para rodar as seeds que vai executar o factory junto e subir dados fakes.

Após concluir a migração dos dados, se não usar o virtualhost precisa rodar o php serve, o Laravel já tem um comando para isso que é: `php artisan serve`

Após rodar o comando você terá acesso ao navegador através da url: `http://localhost:8000`.

Com isso a instalação foi feito com sucesso, os dados de acesso que já foi gerado ao rodar o seed, está dentro da pasta: `database/seeders/UserSeeder.php`.

