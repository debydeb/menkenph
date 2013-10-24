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