# Introducción

Plugin de WordPress que extiende los roles de usuarios base y genera nuevos para ser utilizados en un sitio web de periodismo.

Genera un workflow basado en la manera de llevar a cabo las tareas de edición de artículos en Tiempo Argentino.

Este plugin fue desarrollado como parte de una estrategia Open Source para medios de todo el mundo basada en el CMS WordPress.
Haciendo click en este [enlace](https://tiempoar.com.ar/proyecto-colaborativo/) se puede encontrar más información sobre el proyecto, así como las lista de plugins que complementan a este para tener un sitio completamente funcional.

# Requisitos

- [Wordpress](https://wordpress.org/download/) >= 5.7
- PHP >= 8

# Instalación y activación

- Descargar el último release y extraerlo en `wp-content/plugins/ta-roles`.
- Ir al panel de plugins del sitio (`/wp-admin/plugins.php`) y activar el plugin `Tiempo Argentino - Roles`

# Roles

### Editor

El editor es el encargado de revisar y publicar los artículos generados por los **redactores**. Tiene completo control sobre que artículos se muestran en el sitio.

### Redactor

El redactor puede crear nuevos artículos y editar existentes como copias borrador. No puede publicar ni modificar artículos publicados directamente.

Cuando este crea que un artículo borrador esta listo para ser publicado, debe mandarlo a **revisión**, instancia en la que un **editor** decidirá si esta listo para su publicación.

### Fotógrafo

El fotógrafo es un rol pensado para modificar o establecer las imágenes de los artículos sin interrumpir el trabajo del **redactor** sobre el mismo. Este tiene la capacidad de editar artículos borrador, subir ítems a la galería de medios y crear fotogalerias.

Este rol, junto a la columna de imágenes en el listado de artículos, permite modificar las imágenes de estos sin tener que esperar a que quien este editando el artículo en el momento finalice su sesión.

### Suscriptor

El rol de suscriptor es virtualmente igual al por defecto de WordPress, con el único cambio siendo que sus comentarios en los artículos son automáticamente aprobados.
