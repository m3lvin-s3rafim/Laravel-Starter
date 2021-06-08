# Laravel Starter

<p>Ponto de partida para o desenvolvimento de uma aplicação web com Laravel. Já com algumas configurações favoritas</p>


### Pré-requisitos
Antes de executar o projecto, é necessario que tenha instalado em sua maquina
- [php](https://www.php.net/) >= 7.3
- [composer](https://getcomposer.org/)

No terminal, clone o projecto:
```bash
    git clone https://github.com/kennedy-serafim/Laravel-Starter
```

Entre na pasta do projecto:
```bash
    cd Laravel-Starter
```

#### Crie um arquivo .env na pasta raiz do projecto e copie o conteudo que está no arquivo .env.example

Instale as dependências do projecto:
```bash
    composer install
```

Crie a chave na aplicação:
```bash
    php artisan key:generate
```

Crie as migrations e as seeds essências para rodar a aplicação

```bash
    php artisan migrate
```

Execute a aplicação:
```bash
    php artisan serve
