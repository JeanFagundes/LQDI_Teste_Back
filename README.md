# Rotas

-   GET - localhost:8000/api/users - Pegar todos os usuários
-   POST - localhost:8000/api/users - Cadastrar usuário do formulario
-   POST - localhost:8000/api/sendEmail/{id} - Enviar email para o usuario
-   POST - localhost:8000/api/register - Cadastro de usuario para authenticação
-   POST - localhost:8000/api/login - Authenticar usuário

# Para rodar o código

-   Instalar as dependências do projeto com: composer install
-   Para rodar o projeto: php artisan serve
-   Projeto está configurado para rodar na porta 8000

# DATA/HORA

Projeto iniciou dia 02/11 ás 09hs e terninou dia 02/11 às 00:00h

# Environment Variables

Adicionar ao .env as variáveis abaixo para conexão ao banco de dados e disparo de email.

DB_CONNECTION=mysql

DB_HOST=sql10.freemysqlhosting.net

DB_PORT=3306

DB_DATABASE=sql10658675

DB_USERNAME=sql10658675

DB_PASSWORD=FzzN3EF219

MAILJET_APIKEY_PUBLIC=0a72698ad7264ab26c88745c8c7c3069

MAILJET_APIKEY_PRIVATE=e0dd9a9fce687e4d1237dd45a4298c65

MAIL_MAILER=mailjet

MAIL_HOST=smtp.mailjet.com

MAIL_PORT=587

MAIL_USERNAME=0a72698ad7264ab26c88745c8c7c3069

MAIL_PASSWORD=e0dd9a9fce687e4d1237dd45a4298c65

MAIL_ENCRYPTION=tls

MAIL_FROM_ADDRESS="jean-cabral@hotmail.com"

MAIL_FROM_NAME="${APP_NAME}"` <p align="center"><a href="https://laravel.com" target="_blank">``<img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a>``</p> `
