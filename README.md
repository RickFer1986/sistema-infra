<h1 align="center">Projeto Sistema Infra</h1>

<h2>Passo a passo para rodar o Projeto</h2>
<h3>Clone o projeto e acesse</h3>
<li>git clone https://github.com/RickFer1986/sistema-infra.git "nome_do_seu_projeto"</li>
<li>cd "nome_do_seu_projeto"</li>
<h3>Crie o Arquivo .env</h3>
<li>cp .env.example .env</li>
<h3>Atualize as variáveis de ambiente no arquivo .env</h3>
    <li>APP_NAME="Sistema Infra"</li>
    <li>APP_URL=http://localhost:8989</li>
    <br>
    <li>DB_CONNECTION=mysql</li>
    <li>DB_HOST=mysql</li>
    <li>DB_PORT=3306</li>
    <li>DB_DATABASE=nome_que_desejar_db</li>
    <li>DB_USERNAME=nome_usuario</li>
    <li>DB_PASSWORD=senha_aqui</li>
    <br>
    <li>CACHE_DRIVER=redis</li>
    <li>QUEUE_CONNECTION=redis</li>
    <li>SESSION_DRIVER=redis</li>
    <br>
    <li>REDIS_HOST=redis</li>
    <li>REDIS_PASSWORD=null</li>
    <li>REDIS_PORT=6379</li>
<h3>Suba os containers do projeto</h3>
    <li>docker-compose up -d</li>
<h3>Acesse o container</h3>
<li>docker-compose exec app bash</li>

<h3>Instale as dependências do projeto</h3>
<li>composer install</li>

<h3>Gere a key do projeto Laravel</h3>
<li>php artisan key:generate</li>

<h3>Acesse o projeto http://localhost:8989</h3>
