Para instalar:
1-. Clonar el proyecto a una carpeta en el respectivo directorio Document Root del servidor.
2-. Crear una BD en blanco en PosgreSQL
3-. En app/config/database.php, en los atributos 'username' => '<nombre>' y 'password' => '<clave>', cambiar <nombre> por el nombre del usuario de la BD y <clave> por la clave de usuario de la BD.
4-. Instalar las migraciones: escribir desde la consola "<ruta del proyecto>/$ php artisan migrate:install"
5-. Crear y poblar las tablas y columnas con el uso de migraciones: escribir desde la consola "<ruta del proyecto>/$ php artisan migrate --seed"
6-. Finalmente, al proyecto se podra acceder desde el navegador <Servidor local>/public/ 
