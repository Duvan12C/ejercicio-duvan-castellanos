# Prueba Técnica - GitHub, Laravel API y Docker

Este repositorio contiene la resolución de los ejercicios prácticos solicitados para la prueba técnica.

---

## Ejercicio 1: GitHub y control de versiones

**Objetivo:** Evaluar el manejo de ramas, commits, merges y resolución de conflictos.

**Pasos realizados:**

1. Se creó un repositorio en GitHub y se subió el proyecto inicial con el nombre del autor.
2. Se creó la rama `develop` como rama principal de desarrollo.
3. Se creó una rama de características: `feature/primer-prueba`.
4. Se realizaron **commits atómicos** con mensajes claros y descriptivos.
5. Se fusionó (merge) la rama de características en `develop`.
6. Se simuló un conflicto, el cual fue resuelto correctamente.
7. El proyecto fue subido a un repositorio público en GitHub.
8. Posteriormente, se creó otra rama `feature/prueba2-php` para el desarrollo de la API RESTful en Laravel.
9. Se generó un Pull Request hacia `develop` y se resolvió un conflicto adicional.

---

## Ejercicio 2: Desarrollo de API RESTful con Laravel y MySQL

**Objetivo:** Crear una API RESTful para gestionar una pequeña biblioteca de libros.

**Acciones realizadas:**

1. Se creó la rama `feature/prueba2-php`.
2. Se desarrolló la API con **Laravel** y conexión a **MySQL**.
3. Se crearon:
   - Modelo `Libro`
   - Seeder con datos de ejemplo
   - Controller `LibroController` con métodos CRUD
4. Se implementaron los endpoints:
   - `GET /api/libros` → Listar todos los libros
   - `GET /api/libros/{id}` → Obtener un libro por ID
   - `POST /api/libros` → Crear un libro nuevo
   - `PUT /api/libros/{id}` → Actualizar un libro
   - `DELETE /api/libros/{id}` → Eliminar un libro
5. Se manejaron las respuestas en **formato JSON** y se implementó **validación de datos**.
6. Se utilizaron **try/catch** y un recurso `ApiResponse` para homologar las respuestas.
7. Se subió la colección de requests de **Insomnia** en la carpeta `laravel-api-collection` con todas las pruebas.

---

## Ejercicio 3: Contenerización con Docker y Docker Compose

**Objetivo:** Contenerizar la aplicación Laravel + MySQL utilizando Docker y Docker Compose.

**Acciones realizadas:**

1. Se creó la rama `feature/prueba3-docker`.
2. Se configuró el `Dockerfile` para la aplicación Laravel.
3. Se configuró un servicio MySQL dentro de `docker-compose.yml`.
4. Se aseguraron migraciones y seeders automáticos al iniciar los contenedores.
5. Se configuraron volúmenes para persistencia de datos y código fuente.
6. Se instaló Docker en la máquina local y se verificó la correcta ejecución del sistema.  
   *(Se puede agregar una captura de pantalla de la ejecución exitosa aquí)*

---

## Estructura del repositorio

/feature/primer-prueba → Ejercicio 1 (GitHub, ramas, merges)
/feature/prueba2-php → Ejercicio 2 (API Laravel + MySQL)
/feature/prueba3-docker → Ejercicio 3 (Docker + Docker Compose)
laravel-api-collection/ → Colección de requests para Insomnia

## Notas

- Esta es la primera experiencia del autor con **Docker**, por lo que la sección de contenerización fue implementada y testeada cuidadosamente.
- Todos los ejercicios fueron realizados siguiendo buenas prácticas de control de versiones, validación de datos, manejo de errores y estandarización de respuestas en la API.
- Se recomienda revisar la colección de Insomnia para pruebas rápidas de la API.
