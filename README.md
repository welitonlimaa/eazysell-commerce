# EazySell Commerce

EazySell Commerce é um projeto de e-commerce desenvolvido com Laravel, JavaScript e Tailwind CSS. O projeto simula o fluxo do cliente, desde a adição de produtos ao carrinho até o checkout. Existem três níveis de usuários: user, agent e admin, cada um com seus respectivos níveis de acesso.

## Funcionalidades

- Cadastro de usuários
- Autenticação e autorização de usuários
- Listagem de produtos
- Adição de produtos ao carrinho
- Remoção de produtos do carrinho
- Finalização do pedido no checkout
- Painel de controle para administradores
- Painel de controle para agentes

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







