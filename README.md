<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Configuração e Execução do Projeto

## Back-end (Laravel)

### Configuração:

1. Certifique-se de ter o PHP instalado na sua máquina. Recomenda-se usar PHP 7.x ou superior.
2. Instale o Composer ([link](https://getcomposer.org/)) para gerenciar as dependências do projeto.
3. Clone o repositório do projeto do GitHub: `git clone https://github.com/seu-usuario/seu-projeto.git`.
4. Navegue até o diretório do projeto: `cd seu-projeto`.
5. Instale as dependências do Composer: `composer install`.
6. Copie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente necessárias, como a conexão com o banco de dados e a chave de criptografia.
7. Gere uma nova chave de aplicativo: `php artisan key:generate`.
8. Execute as migrações do banco de dados para criar as tabelas: `php artisan migrate`.

### Execução:

1. Inicie o servidor Laravel: `php artisan serve`.
2. O servidor estará disponível em http://localhost:8000 por padrão.
3. Você pode acessar os endpoints da API em http://localhost:8000/api.

## Front-end (Vue.js)

### Configuração:

1. Certifique-se de ter o Node.js e o npm instalados na sua máquina.
2. Clone o repositório do projeto do GitHub (se ainda não o fez).
3. Navegue até o diretório do front-end: `cd seu-projeto/front-end`.
4. Instale as dependências do npm: `npm install`.

### Execução:

1. Inicie o servidor de desenvolvimento Vite: `npm run dev`.
2. O servidor estará disponível em http://localhost:3000 por padrão.
3. Você pode acessar a aplicação web no navegador.

## Bibliotecas e Ferramentas de Terceiros Utilizadas

- **Laravel:** Um framework PHP moderno e poderoso para o desenvolvimento de aplicações web robustas e escaláveis. Escolhido pela sua simplicidade, flexibilidade e rica coleção de recursos.
- **Vue.js:** Uma biblioteca JavaScript progressiva para construir interfaces de usuário interativas. Escolhido pela sua abordagem de componentização e sua facilidade de integração com o Laravel.
- **Vite:** Um construtor de aplicações web rápido e flexível para o ecossistema Vue.js. Escolhido pela sua velocidade de desenvolvimento e sua capacidade de integração perfeita com o Vue.js.
- **Axios:** Um cliente HTTP baseado em Promises para fazer requisições AJAX no navegador e no Node.js. Escolhido pela sua simplicidade e facilidade de uso.

Essas são apenas algumas das bibliotecas e ferramentas de terceiros utilizadas no projeto. Cada uma foi escolhida com base nas necessidades específicas do projeto, levando em consideração a eficiência, a facilidade de uso e a comunidade de suporte.

