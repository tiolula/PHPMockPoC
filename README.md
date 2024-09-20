# Prova de Conceito de Mock em PHP

Este é um projetinho simples só pra verificar, de forma rápida, como usar mock de uma forma básica em PHP.

## Referências

Ele foi construído com base:

- [Neste repositório](https://github.com/microsoft/vscode-remote-try-php) para uso de devcontainers. Assim não precisamos ficar instalando coisas do PHP na máquina
- [Neste tutorial](https://www.freecodecamp.org/news/test-php-code-with-phpunit/) pro setup inicial dos testes
- [Neste tutorial](https://medium.com/nona-web/mocking-in-phpunit-802f91112645) para uso de mock em um contexto simples (Hello World)

## Para rodar

1. Abra o projeto no VSCode usando devcontainer
2. Dentro do container, rode o comando `vendor/bin/phpunit --colors=auto tests`