#Se deben tener estos programas antes de levantar el proyecto:

Se necesita tener instalado(deben realizarse en orden): 
1. XAMPP con una versión de PHP mayor o igual a 7.3
2. Git
3. Composer

#Como levantar el proyecto locamente:
Una vez instalados, hay que:
1. Dirigirse hacia la carpeta donde se instaló XAMPP
2. Ir a la carpeta htdocs y borrar el archivo index.php
3. En la misma carpeta htdocs, abrir una terminal de comandos y escribir: `git clone https://github.com/sky-zoo/TestDesarrollo.git`
4. Una se haya clonado el repositorio, desde la terminal de comandos escribir: `cd TestDesarrollo` y luego escribir el comando: `composer install`
5. Hacer una copia del archivo: `.env.example`. Luego a esa copia hay que cambiarle el nombre a: `.env`
6. Abrir el archivo: `.env` y modificar el valor de `DB_DATABASE` para que sea igual a `autos`(así: DB_DATABASE=autos)
7. Luego abrir un navegador web y escribir `localhost/phpmyadmin` y crear una base de datos que se llame `autos`
8. Luego volver a la terminal de comandos y estando en el directorio TestDesarrollo, escribir los siguientes comandos: 
	1. `php artisan cache:clear`
	2. `php artisan key:generate`
	3. `php artisan migrate`
	4. `php artisan db:seed`
Una vez completado todo, ir a un navegador web y escribir localhost, deberían aparecer las carpetas que se encuentran en el directorio htdocs, hacer click en la carpeta TestDesarrollo, luego hacer click en public y listo.