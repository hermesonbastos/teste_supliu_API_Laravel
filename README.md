## API REST Laravel 10

**Importante!**
* Se quiser utilizar SQLite ao invés do MySQL (mais prático para testes), no seu arquivo `.env`, realize as seguintes configurações:
* Comente tudo abaixo:
```
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=discografia_api
# DB_USERNAME=root
# DB_PASSWORD=
```
* Adicione a seguinte configuração:
```
DB_CONNECTION=sqlite
```
* Agora é só rodar `php artisan migrate` na raiz do projeto para atualizar o banco de dados;
* Execute `php artisan serve` para iniciar o projeto.

**Descrição:**

Esta API REST foi desenvolvida em Laravel 10 e representa meu primeiro projeto com essa tecnologia. Ela oferece endpoints para gerenciar álbuns e faixas musicais, com funcionalidades básicas de CRUD (Criar, Ler, Atualizar e Deletar).

## Guia de Setup para Aplicação Laravel 10

**Pré-requisitos:**

* PHP 8.0 ou superior
* Composer

**Instalação:**

1. **Instale o PHP:**

    * Verifique se o PHP já está instalado em seu sistema.
    * Se não estiver, faça o download e instale a versão mais recente do PHP 8.0 ou superior para seu sistema operacional: [https://www.php.net/downloads.php](https://www.php.net/downloads.php)

2. **Instale o Composer:**

    * Acesse o site do Composer: [https://getcomposer.org/](https://getcomposer.org/)
    * Siga as instruções de instalação para o seu sistema operacional.

3. **Crie um novo diretório para o seu projeto Laravel:**

```
composer create-project laravel/laravel nome-do-projeto
```

4. **Navegue para o diretório do projeto:**

```
cd nome-do-projeto
```

5. **Instale as dependências do projeto:**

```
composer install
```

6. **Configure o banco de dados(vou configurá-lo inicialmente para utilizar um banco SQLite, não se preocupe):**

    * Edite o arquivo `.env` e configure as variáveis de conexão com o banco de dados.
    * Crie o banco de dados e as tabelas necessárias.

7. **Crie as tabelas do banco de dados:**

```
php artisan migrate
```

**Funcionalidades:**

* **Álbuns:**
    * Criar um novo álbum.
    * Obter todos os álbuns.
    * Obter um álbum específico por ID.
    * Atualizar um álbum existente.
    * Excluir um álbum.
* **Faixas:**
    * Criar uma nova faixa (relacionada a um álbum).
    * Obter todas as faixas.
    * Obter uma faixa específica por ID.
    * Atualizar uma faixa existente.
    * Excluir uma faixa.
* **Relacionamentos:**
    * Obter todas as faixas de um álbum específico.
    * Obter todos os álbuns com suas faixas relacionadas.

**Rotas:**

| Rota | Descrição | Método HTTP |
|---|---|---|
| `/api/albuns` | Recupera todos os álbuns. | GET |
| `/api/albuns/{id}` | Recupera um álbum específico pelo ID. | GET |
| `/api/albuns` | Cria um novo álbum. | POST |
| `/api/albuns/{id}` | Atualiza um álbum existente. | PUT |
| `/api/albuns/{id}` | Exclui um álbum. | DELETE |
| `/api/faixas` | Recupera todas as faixas. | GET |
| `/api/faixas/{id}` | Recupera uma faixa específica pelo ID. | GET |
| `/api/faixas` | Cria uma nova faixa. | POST |
| `/api/faixas/{id}` | Atualiza uma faixa existente. | PUT |
| `/api/faixas/{id}` | Exclui uma faixa. | DELETE |
| `/albuns/{id}/faixas` | Obter todas as faixas de um álbum específico. | GET |
| `/with-faixas` | Obter todos os álbuns com suas faixas relacionadas. | GET |

**Observações:**

* Essse foi o meu primeiro projeto utilizando PHP, consequentemente o primeiro utilizando Laravel, e deixo o relato de que foi uma uma experiência gratificante pela praticidade, otimização da ferramenta e pelo contato com novas tecnologias, que casou muito bem com o seu front-end.
* FrontEnd (React): [https://github.com/hermesonbastos/teste_supliu_front](https://github.com/hermesonbastos/teste_supliu_front) 

**Agradecimentos:**

Documentação do Laravel 10: [https://laravel.com/docs/10.x](https://laravel.com/docs/10.x)

* ### Obrigado pela visita. Pra cima, sempre!❤️🚀
