# Crypto Tracker - Backend

> **Info** :information_source:
> El proyecto consiste en crear un sitio web que muestre el precio actual del Bitcoin en dólares en tiempo real. Además, se debe guardar el precio en una base de datos local y mostrar el historial de precios.

## Instalación

1. Clonar el repositorio usando el comando `git clone https://github.com/seba-m/pruebaTecnicaBackend.git`
2. Navegar a la carpeta del proyecto clonado utilizando el comando `cd pruebaTecnicaBackend`.
3. Instalar las dependencias del proyecto utilizando composer, ejecutando el comando `composer install`.
4. Crear una base de datos en PostgreSQL llamada `dbProyecto`.
5. Modificar el archivo `.env` con las variables de entorno deseadas.
   1. En el proyecto, solo se modificaron los valores de las variables de entorno `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME` y `DB_PASSWORD`.
   2. Se puede utilizar el archivo `.env.example`, que contiene la estructura.
6. Migrar la base de datos utilizando `php artisan migrate`
7. Rellenar la base de datos con las monedas deseadas mediante `php artisan db:seed --class=MonedaSeeder`.
8. Iniciar el proyecto utilizando `php artisan serve`.
9. Ejecutar el cron job con el comando `php artisan short-schedule:run --lifetime=60` para que se actualice el precio del Bitcoin cada 10 segundos.

## Tecnologías utilizadas

- [Laravel](https://laravel.com/)

## Autor

- Sebastian Morgado - [seba-m](https://github.com/seba-m)

## Licencia

Este proyecto está licenciado bajo la licencia MIT - ver el archivo [LICENSE](LICENSE) para más detalles.

## Demo

Puede ver el proyecto en funcionamiento en el siguiente enlace: <https://prueba-cryptotracker.vercel.app/>
