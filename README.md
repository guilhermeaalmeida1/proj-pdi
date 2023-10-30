# proj-pdi

No primeiro momento vamos precisar criar uma estrutura inicial para setup da aplicação, onde essa estrutura deve conter os seguintes requisitos:

- Docker (Utilizar PHP 8.2 e Nginx última versão alphine)
- CI Utilizando o github actions
- PHP Unit
- PHPCS-Fixer
- PHP Infection
- PSR-4

## Criando projeto

- Criar as instancias: 
> docker compose up -d --build

- Acessar bash 
> docker exec -it app bash

## Comandos
Alguns comandos podem ser executados usando o composer

Rodar os testes existentes
> composer test

Usar o csfixer
> composer csfixer

Usar o PHP Infection 
> composer phpinfection