# Mambo Kanbam

Este es el resultado del test de Mambo.

## Requerimientos

Para ejecutar este proyecto, necesitas tener instalados los siguientes programas:

-   [PHP](https://www.php.net/) (recomendado v8.0 o superior)
-   [Composer](https://getcomposer.org/)
-   [SQLite](https://www.sqlite.org/)

## Instalación

**Clona el repositorio**:

```bash
  git clone https://github.com/Calvarenga96/mambo_back.git
```

2. **Navega al directorio del proyecto**:

```bash
  cd mambo_back
```

3. **Instala las dependencias de PHP**:

```bash
  composer install
```

4. **Correr el siguiente comando para la base de datos**:

```bash
  php artisan migrate --seed
```

5. **Iniciar el servidor**:

```bash
  composer run dev
```

## .env

#### (se sube solo con fines del test, en un ambiente de trabajo real no se debe subir por cuestiones de seguridad)

```bash
  APP_NAME=Laravel
  APP_ENV=local
  APP_KEY=base64:Z9AMbQVJoAbn725AZ7XCeVe7PSD9MgvPN5fTBYxfIII=
  APP_DEBUG=true
  APP_TIMEZONE=UTC
  APP_URL=http://localhost

  APP_LOCALE=en
  APP_FALLBACK_LOCALE=en
  APP_FAKER_LOCALE=en_US

  APP_MAINTENANCE_DRIVER=file
  # APP_MAINTENANCE_STORE=database

  PHP_CLI_SERVER_WORKERS=4

  BCRYPT_ROUNDS=12

  LOG_CHANNEL=stack
  LOG_STACK=single
  LOG_DEPRECATIONS_CHANNEL=null
  LOG_LEVEL=debug

  DB_CONNECTION=sqlite
  # DB_HOST=127.0.0.1
  # DB_PORT=3306
  # DB_DATABASE=laravel
  # DB_USERNAME=root
  # DB_PASSWORD=

  SESSION_DRIVER=database
  SESSION_LIFETIME=120
  SESSION_ENCRYPT=false
  SESSION_PATH=/
  SESSION_DOMAIN=null

  BROADCAST_CONNECTION=log
  FILESYSTEM_DISK=local
  QUEUE_CONNECTION=database

  CACHE_STORE=database
  CACHE_PREFIX=

  MEMCACHED_HOST=127.0.0.1

  REDIS_CLIENT=phpredis
  REDIS_HOST=127.0.0.1
  REDIS_PASSWORD=null
  REDIS_PORT=6379

  MAIL_MAILER=log
  MAIL_SCHEME=null
  MAIL_HOST=127.0.0.1
  MAIL_PORT=2525
  MAIL_USERNAME=null
  MAIL_PASSWORD=null
  MAIL_FROM_ADDRESS="hello@example.com"
  MAIL_FROM_NAME="${APP_NAME}"

  AWS_ACCESS_KEY_ID=
  AWS_SECRET_ACCESS_KEY=
  AWS_DEFAULT_REGION=us-east-1
  AWS_BUCKET=
  AWS_USE_PATH_STYLE_ENDPOINT=false

  VITE_APP_NAME="${APP_NAME}"

  FRONTEND_URL=http://localhost:5173
  SANCTUM_STATEFUL_DOMAINS=localhost:5173
  SESSION_DOMAIN=localhost
  SESSION_DRIVER=cookie
  SESSION_DOMAIN=localhost

```

## Usuarios de prueba

Usuarios

-   chris@prueba.com
-   jorge@prueba.com

Contraseña de ambos: **12345678**
