# CRUD-david-php

Configuração e Execução do Projeto
Back-end (Laravel)
Configuração
Certifique-se de ter o PHP e o Composer instalados no seu sistema.
Clone o repositório do projeto do GitHub.
bash
Copy code
git clone https://github.com/seu-usuario/seu-projeto.git
Navegue até o diretório do projeto.
bash
Copy code
cd seu-projeto
Instale as dependências do Laravel usando o Composer.
bash
Copy code
composer install
Copie o arquivo .env.example para .env e configure as variáveis de ambiente, como conexão com o banco de dados.
bash
Copy code
cp .env.example .env
Gere a chave de aplicativo do Laravel.
bash
Copy code
php artisan key:generate
Execute as migrações do banco de dados para criar as tabelas.
bash
Copy code
php artisan migrate
Execução
Inicie o servidor embutido do Laravel.
bash
Copy code
php artisan serve
O servidor estará disponível em http://localhost:8000.
Front-end (Vue.js)
Configuração
Certifique-se de ter o Node.js e o npm instalados no seu sistema.
Clone o repositório do projeto do GitHub (se ainda não tiver feito).
bash
Copy code
git clone https://github.com/seu-usuario/seu-projeto.git
Navegue até o diretório do projeto.
bash
Copy code
cd seu-projeto
Instale as dependências do Vue.js.
bash
Copy code
npm install
Execução
Inicie o servidor de desenvolvimento do Vue.js.
bash
Copy code
npm run dev
O servidor estará disponível em http://localhost:5173.
Bibliotecas e Ferramentas de Terceiros
Back-end (Laravel)
Laravel: Framework PHP elegante e expressivo para desenvolvimento web.
Escolha: Laravel oferece uma ampla gama de funcionalidades integradas, segurança e uma comunidade ativa.
Composer: Gerenciador de dependências para PHP.
Escolha: Composer simplifica a instalação e atualização de bibliotecas PHP.
Front-end (Vue.js)
Vue.js: Framework JavaScript progressivo para construção de interfaces de usuário.
Escolha: Vue.js é intuitivo, leve e oferece uma ótima experiência de desenvolvimento.
Vite: Build tool rápida e moderna para projetos Vue.js.
Escolha: Vite oferece recarregamento rápido e uma experiência de desenvolvimento eficiente.
Axios: Cliente HTTP para fazer requisições AJAX.
Escolha: Axios é fácil de usar, suporta promessas e oferece uma API intuitiva para fazer solicitações HTTP.
