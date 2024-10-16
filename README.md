<h1 align="center">Projeto Sistema Infra</h1>

<h2>Passo a passo para rodar o Projeto</h2>
<h3>Clone o projeto e acesse</h3>
<p>1. git clone https://github.com/RickFer1986/sistema-infra.git "nome_do_seu_projeto"</p>
<p>2. cd "nome_do_seu_projeto"</p>
<h3>Crie o Arquivo .env</h3>
<p>3. cp .env.example .env</p>
<h3>Atualize as variáveis de ambiente no arquivo .env</h3>
<ul>
    <li>APP_NAME="Sistema Infra"</li>
    <li>APP_URL=http://localhost:8989</li>
</ul>



DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=nome_que_desejar_db
DB_USERNAME=nome_usuario
DB_PASSWORD=senha_aqui

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
</p>

