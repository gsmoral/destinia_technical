> Prueba técnica realizada siguiendo las bases que hay en **Enunciado.md**

## Estructura de base de datos

El archivo src\db\db.sql incluye las sentencias necesarias para la creación de la base de datos con el nombre dev_gsm_destinia.

## Código

Desde el directorio raiz, ejecutar:
- `composer install` para instalar las dependencias.

Modificar el fichero **.env** y añadir los datos de conexión a la base de datos.

## Ejecución
Desde el directorio raiz ejecutar por ejemplo:
- `php index.php Hot`

## A tener en consideración
- Se ha simplificado al máximo el diseño atendiendo a los requerimientos, pero teniendo en cuenta que sea mantenible y que pueda crecer en un futuro.
- Se ha creado una clase principal y dos que extienden de esta, llevando el mismo diseño con sus respectivas claves foraneas al deseño de la base de datos.
- Teniendo en cuenta que debe soportar múltiples idiomas; aparte de los idiomas latinos debería soportar idiomas del medio oriente y asiáticos. Nos hemos asegurado que la base de datos y las tablas estén configuradas con una collación adecuada que admita caracteres de múltiples idiomas. Se ha elegido una collación como utf8mb4_unicode_ci para admitir una amplia gama de caracteres.
- Al no tener un entorno **LAMP** disponible, se ha creado todo en un entorno **WAMP**, creemos que esto no debería ser un inconveniente para su funcionamiento.