Para instalar:

1-. Clonar el proyecto a una carpeta en el respectivo directorio del servidor: git clone git://github.com/hrsn/CRUD2.git <br>
2-. Crear una BD en blanco en PosgreSQL<br>
3-. En app/config/database.php, en los atributos 'database' => 'basededatos', 'username' => 'nombreusuario' y 'password' => 'claveusuario', cambiar basededatos por el nombre de la BD, nombreusuario por el nombre del usuario de la BD y claveusuario por la clave de usuario de la BD.<br>
4-. Instalar las migraciones: escribir desde la consola <i>ruta_del_proyecto/$ php artisan migrate:install</i><br>
5-. Crear y poblar las tablas y columnas con el uso de migraciones: escribir desde la consola "ruta_del_proyecto/$ php artisan migrate --seed"<br>
6-. Finalmente, al proyecto se podra acceder desde el navegador Servidor_local/public/ 
