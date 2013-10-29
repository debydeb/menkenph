[Menken Pharma](http://www.menkenpharma.com.ar) Website
=======================================================

Author: Franca Creative Studio





Config.php
----------

La ruta especificada en '$config['base_url']' siempre debe tener el prefijo 'http://'



Config database
---------------

1. Ir al archivo application/config/database.php
2. Modificar los siguientes parametros por los que sean necesarios en el entorno local:

```bash
	-$db['default']['username'] = '';
	-$db['default']['password'] = '';
	-$db['default']['database'] = '';
```

*No modificar '$db['default']['hostname'] = 'localhost';'



Base de Datos (BD)
------------------

La base de datos se encuentra en formato '.sql' en la carpeta BD




Setear VirtualHost
-------------------

Para el correcto funcionamiento local de la aplicacion es necesario setear un host virtual dentro del servidor.
O modificar el archivo 'application/config/config.php' y setear el parametro
'$config['base_url']	= 'localhost/ruta-del-sitio-local';'

En apache agregar en 'c:/wamp/bin/apache/apachex.x.x/conf/httpd.conf'

```bash
	## localhost
	NameVirtualHost localhost

	<VirtualHost localhost>
	    DocumentRoot C:/wamp/www/
	    ServerName localhost
	</VirtualHost>

	## menkenpharma
	NameVirtualHost local.menken

	<VirtualHost local.menken>
	    DocumentRoot C:\Users\FACU\Dropbox\www\menkenpha
	    ServerName local.menken
	</VirtualHost>
```

Modificar 'C:/windows/system32/drivers/hosts' y agregar el host de menken pharma

```bash
	127.0.0.1 	local.menken
```