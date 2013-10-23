[Menken Pharma](http://www.menkenpharma.com.ar) Website
=======================================================

Author: Franca Creative Studio


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