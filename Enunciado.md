## Que es lo que queremos de esta prueba
Diariamente nos enfrentamos a nuevos proyectos y mantenimientos sobre nuestro propio software. No tenemos mucho tiempo que perder y, cada vez que nos solicitan algo nuevo, nos gustaría entender el código que tenemos entre manos rápidamente para poder incrementar su funcionalidad.

Simplemente queremos que demuestres tu habilidad como programador profesional, creando código que sea:

- Limpio, mantenible y estructurado. Que sea fácil corregir posibles errores y ampliar su funcionalidad, normalmente con utilización óptima de Programación Orientada a Objetos, diseño por capas y patrones MVC.
- Confiable. Que no tenga errores, con una buena gestión de de excepciones y del que además podamos verificar que aunque introduzcamos nuevos cambios, seguirá funcionando en la parte que desarrollemos ahora.
- Rápido y austero. Que sea lo más rápido posible y además tenga un consumo de recursos aceptable
- Seguro. Protegido con las medidas básicas ante ataques externos
- Tiempo de desarrollo. No podemos divagar mucho. Hay que concentrarse, realizar el desarrollo de lo que nos piden con la suficiente calidad y sin utilizar más tiempo del necesario.
- Calidad de diseño (Base de datos, sistema de clases, ...)
- Queremos que crees un código del que te sientas orgulloso y que facilite la vida al resto de programadores de tu futuro equipo.

## ¿Aceptas el reto?
Te vamos a describir un problema y debes programar su solución en PHP con acceso a base de datos MySQL. Debería poder ejecutarse directamente por consola con el intérprete de PHP.
Tendremos en cuenta el tiempo que tardes en enviarnos la solución, pero no te apresures. Estimamos que podría estar resuelto en menos de tres horas pero fíjate bien en los objetivos de la prueba. No basta con resolver el problema y que funcione, hay que resolverlo con la suficiente calidad, así que toma el tiempo que consideres necesario.

## Características de la solución
- **Debes usar POO y buenas prácticas**, queremos ver tu mejor código ;)
- Para implementar la solución puedes utilizar cualquier función PHP y en general cualquiera de las proporcionadas por sus extensiones (http://php.net/manual/en/funcref.php). Algunas extensiones requieren de sistemas anexos. Cuenta con que están implantados e inventa las credenciales de acceso si son necesarias (MySQL, ...).
- No deberías utilizar frameworks de desarrollo (Symphony, Zend framework, CakePHP, ...).
- Puedes utilizar librerías desarrolladas por ti si lo crees conveniente, incluyendo su código en el paquete que nos envíes.
- La solución debería funcionar adecuadamente en un entorno LAMP y debes describir cualquier detalle que creas conveniente para su implantación (sentencias SQL que generen las tablas - DDL, datos de prueba, configuraciones especiales de los diferentes sistemas de ser necesarias, ...).
- Debe soportar múltiples idiomas; aparte de los idiomas latinos debería soportar idiomas del medio oriente y asiáticos
- Si consideras necesario implementar tests, por favor, utiliza PHPUnit.
- Si realizas algún diseño preliminar, utiliza PlantUML (http://plantuml.sourceforge.net/)

## La prueba
Queremos implementar una pequeña aplicación en PHP que, tomando las tres primeras letras de la entrada estándar, devuelva por la salida estándar todas las coincidencias de hospedajes existentes en una determinada base de datos, ordenados por nombre, incluyendo sus características y su ubicación.

Tenemos dos tipos de hospedajes, Hoteles y Apartamentos, cada uno con sus características específicas. En el caso de los hoteles, además de su nombre, necesitamos conocer el número de estrellas y el tipo de habitación estándar que tienen (dejamos a tu elección proponer unos cuantos tipos de habitación como doble, doble con vistas, ...). En el caso de los apartamentos y además de su nombre, necesitamos conocer para cada propiedad cuantos apartamentos tienen disponibles y para cuantos adultos tienen capacidad, teniendo en cuenta que sólo tienen un tipo de apartamentos.

Para la ubicación de cualquier hospedaje nos basta con indicar la ciudad y provincia.

La salida (a mostrar por salida estándar) debería ser un listado del siguiente tipo:

- Hotel Azul, 3 estrellas, habitación doble con vistas, Valencia, Valencia
- Apartamentos Beach, 10 apartamentos, 4 adultos, Almeria, Almeria
- Hotel Blanco, 4 estrellas, habitación doble, Mojacar, Almeria
- Hotel Rojo, 3 estrellas, habitación sencilla, Sanlucar, Cádiz
- Apartamentos Sol y playa, 50 apartamentos, 6 adultos, Málaga, Málaga
- ...

## Para completar la prueba debes facilitarnos:
- La estructura de base de datos para almacenar la información necesaria, facilitándonos las sentencias SQL (MySQL) para la creación de las tablas.
- El código, incluyendo las clases necesarias para la implementación de la aplicación.
- Cualquier otra documentación que consideres necesario.
- Hay que comprimir todo en un solo fichero.