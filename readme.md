# Talently Challenge

## Flujo

Debes tener instalado docker en tu computadora para usar nuestros comandos del flujo de trabajo

- Usa el comando `./start` para inicializar el docker
- Usa el comando `./test` para correr los tests
- Usa el comando `./finish` para desactivar el docker


# Preguntas de conocimiento en Laravel
<ol>
<li> ¿Qué paquete o estrategia utilizarías para levantar un sistema de administración rápidamente? (Autenticación y CRUDs)

    Para el caso de laravel con rutas web usaría el paquete Laravel/ui,ya que se encarga de la configuración del inicio de sesión y middleware que valida la autenticación del usuario.
    Para el caso de laravel con rutas api usaría el paquete laravel/sanctum, ya que está automatizado para la creación de token OAuth y también cuenta con un middleware que verifica la validez del token.
    Para el manejo de CRUDs podria apoyarme en la libreria Craftable ya que permite crear rápidamente un panel de administracion con personalizacion limitada solo con la definición de las migraciones.
</li>
<li> Una breve explicación de cómo laravel utiliza la inyección de dependencias.

    Su fin es disminuir el acoplamiento entre componentes separando el código por responsabilidades específicas, es decir cuenta con clases abstractas que permiten la usabilidad de sus propiedades y métodos en otras. En el caso de los controladores, extienden de un único controlador donde se realizó previamente la base de dicha clase.
</li>
<li> En qué casos utilizarías un Query Scope?
   
    Para este caso usare de ejemplo el modelo User.
    Usaría un Global Scope en el caso de que la migración cuente con el campo status y solo desee trabajar con los usuarios activos, de esta forma evitará estar filtrando en todas las consultas que realice si el usuario esta activo o no.
    Usaría un Local Scope para una consulta que necesite usar con frecuencia como la búsqueda del usuario por correo.

</li>
<li> Qué convenciones utilizas en la creación e implementación de migraciones?

    Empecemos por la creación de la migración la cual está asociada al nombre del modelo, está en plural y en formato snake_case, por ejemplo el modelo sería User y la migración create_users_table.
    La clave primaria es id de tipo entero y auto-incremental.
    Y por defecto agrega los campos created_at y updated_at ambos con $this->timestamps.
</li>