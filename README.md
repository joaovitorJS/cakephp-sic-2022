# Minicurso de CakePHP - SIC - 2022
Aplicação de Perguntas e Respostas usando CakePHP, Docker, PostregSQL, com autenticação de usuários.

## Como executar 

### Ferramentas necessárias

* GIT
* Docker
* Docker Compose

### Executando

No terminal já aberto, clonar o repositório. <br>
**Todos os comandos devem ser executados sem o '$'**
```bash
# SSH
$ git clone git@github.com:joaovitorJS/cakephp-sic-2022.git

# Https
$ git clone https://github.com/joaovitorJS/cakephp-sic-2022.git
```

Abrir a pasta `cakephp-sic-2022`, e executar o *docker*.
```bash
$ cd cakephp-sic-2022

$ cd docker

# Executar o docker
$ docker-compose up --build
```

Em um outro terminal, na pasta do projeto `cakephp-sic-2022`, executar os seguintes comandos:
```bash
$ docker exec -it php-fpm /bin/bash

## Dentro do container do docker `var/www/web`
$ composer install

## Sair do container
$ exit

## Após sair do container, abrir o projeto no vscode
$ code .
```

<br>
Com o projeto aberto no vscode 












