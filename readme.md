<h2>Para instalar:</h2>

1-. Clonar el proyecto a una carpeta en el respectivo directorio del servidor:<br><center><i>git clone git://github.com/hrsn/CRUD2.git</i></center> <br>
2-. Crear una BD en blanco en PosgreSQL<br>
3-. En app/config/database.php, en los atributos <i>'database' => 'basededatos', 'username' => 'nombreusuario' y 'password' => 'claveusuario'</i>, cambiar <i>basededatos</i> por el nombre de la BD, <i>nombreusuario</i> por el nombre del usuario de la BD y <i>claveusuario</i> por la clave de usuario de la BD.<br>
4-. Instalar las migraciones: escribir desde la consola <i>ruta_del_proyecto/$ php artisan migrate:install</i><br>
5-. Crear y poblar las tablas y columnas con el uso de migraciones: escribir desde la consola <i>ruta_del_proyecto/$ php artisan migrate --seed</i><br>
6-. Finalmente, al proyecto se podra acceder desde el navegador <i>servidor_local/public/</i> 
