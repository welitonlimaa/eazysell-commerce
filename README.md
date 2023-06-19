# EazySell Commerce

EazySell Commerce é um projeto de e-commerce desenvolvido com Laravel, JavaScript e Tailwind CSS. O projeto simula o fluxo do cliente, desde a adição de produtos ao carrinho até o checkout. Existem três níveis de usuários: user, agent e admin, cada um com seus respectivos níveis de acesso.

## Funcionalidades

- Cadastro de usuários
- Autenticação e autorização de usuários
- Listagem de produtos
- Filtragem de produtos por categoria
- Ordenação de produtos por preço
- Adição de produtos ao carrinho
- Remoção de produtos do carrinho
- Finalização do pedido no checkout
- Painel de controle para administradores
- Painel de controle para agentes
- Cadastramento de novos produtos

## Screenshots
### Home
![home](https://github.com/welitonlimaa/eazysell-commerce/assets/108986668/c1dd742c-a416-451b-8907-b9d16787430a)

### Cart
![cart](https://github.com/welitonlimaa/eazysell-commerce/assets/108986668/3229b508-b33d-44e5-b6df-ff76f31c7b44)

### Orders
![orders](https://github.com/welitonlimaa/eazysell-commerce/assets/108986668/b665da4f-33d0-4333-a425-60cc7ba7c558)

## Banco de Dados
![db](https://github.com/welitonlimaa/eazysell-commerce/assets/108986668/5a11dcf8-b189-4820-ac93-df8475b74316)

## Tecnologias Utilizadas

* Laravel
* PHP 8
* MySQL
* JavaScript
* Tailwind CSS

## Pré-requisitos

Certifique-se de ter as seguintes dependências instaladas em seu ambiente de desenvolvimento:

- PHP >= 8
- MySQL
- Composer
- Node.js
- NPM

## Instalação

1. Clone o repositório para o seu ambiente local:
git clone https://github.com/welitonlimaa/eazysell-commerce.git


2. Acesse o diretório do projeto:
cd eazysell-commerce


3. Instale as dependências do Composer:
composer install


4. Copie o arquivo `.env.example` e renomeie-o para `.env`. Configure as variáveis de ambiente, como as informações do banco de dados.

6. Execute as migrações do banco de dados:
php artisan migrate

7. Compile os assets (JavaScript, CSS, etc.):
npm install
npm run dev

8. Inicie o servidor de desenvolvimento:
php artisan serve

10. Acesse o projeto no navegador em `http://localhost:8000`.







