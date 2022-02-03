## Features

- API Rest para consulta y registro de posts
- Área pública con acceso al listado de posst, página de detalle y acceso a la documentación del API
- Integrado al API de https://jsonplaceholder.typicode.com
- Tecnologías, frameworks y librerias: PHP 7.4, Laravel 8, Bootstrap, PHPStan, PHP-CS-Fixer, PHPUnit, [DarkaOnLine/L5-Swagger](https://github.com/DarkaOnLine/L5-Swagger "DarkaOnLine/L5-Swagger")

### Consideraciones técnicas
Al realizar el análisis del API externa y su documentación para la integración con la misma, no se evidenció un endpoint que permitiera cumplir con uno de los requisitos de retornar un listado de posts y sus autores, por lo que se implementó un servicio que permitiera realizar dicha relación, a partir del consumo de dos recursos. Para el consumo del API se usó la extensión cliente Guzzle, ya incluida en la versión usada de Laravel.

Se implementan los conceptos de arquitectura hexagonal separando las capas de dominio, infraestructura y controladores. Se aprovecha las facilidades que brinda el “Service Provider” del framework para aplicar la inyección de dependencias a los objetos de la aplicación.

Como alternativa de la solución se podría plantear la inclusión de una base de datos, que sirva como modelo para la relación de posts – autores, de esta forma se evitaría el procesamiento de datos para construir la relación desde la lógica del aplicativo.