# Catálogo de Productos con Laravel

Este repositorio contiene un esqueleto básico para un proyecto Laravel que utiliza Tailwind CSS para el diseño y la estilización.

## Instrucciones de Instalación

1. Clonar el repositorio:

    ```bash
    git clone https://github.com/david3010M/catalogoProductos.git
    ```

2. Acceder al directorio del proyecto:

    ```bash
    cd catalogoProductos
    ```

3. Instalar las dependencias de PHP utilizando Composer:

    ```bash
    composer install
    ```

4. Copia el archivo de configuración `.env.example` y créalo como `.env`:

    ```bash
    cp .env.example .env
    ```

5. Generar una nueva clave de aplicación:

    ```bash
    php artisan key:generate
    ```

6. Instalar las dependencias de Node.js:

    ```bash
    npm install
    ```

7. Compilar los assets:

    ```bash
    npm run dev
    ```

## Uso

Para iniciar el servidor de desarrollo de Laravel:

```bash
php artisan serve
```

Para probar con datos:

```bash
php artisan migrate
php artisan db:seed
```
