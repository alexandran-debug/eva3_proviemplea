# ProviEmplea API

API REST desarrollada con Laravel 11 para la gestión de empleos utilizando Docker, MySQL, Swagger y Postman.

---

# Descripción del Proyecto

ProviEmplea API es un sistema backend desarrollado como una API RESTful para administrar empleos. El proyecto permite realizar operaciones CRUD completas sobre los registros de empleos.

La aplicación fue desarrollada utilizando Laravel 11 y ejecutada mediante contenedores Docker, utilizando MySQL como motor de base de datos y Swagger para la documentación interactiva de la API.

---

# Tecnologías Utilizadas

- Laravel 11
- PHP 8.4
- MySQL 8
- Docker
- Docker Compose
- Nginx
- Swagger (L5 Swagger)
- Postman

---

# Funcionalidades Implementadas

La API permite:

- Listar empleos
- Crear empleos
- Actualizar empleos
- Eliminar empleos

Además:

- Documentación automática con Swagger
- Contenedores Docker funcionales
- Persistencia de datos con MySQL
- Pruebas realizadas con Postman

---

# Estructura del Proyecto

```text
EVA3_PROVIEMPLEA/
└── backend/
    ├── app/
    │   ├── Http/
    │   │   └── Controllers/
    │   │       └── Api/
    │   │           ├── EmpleoController.php
    │   │           └── Controller.php
    │   ├── Models/
    │   │   ├── Empleo.php
    │   │   └── User.php
    │   ├── Providers/
    │   └── Swagger/
    │       └── SwaggerAnnotations.php
    ├── bootstrap/
    │   ├── cache/
    │   ├── app.php
    │   └── providers.php
    ├── capturas/
    │   ├── delete-empleo.png
    │   ├── docker-containers.png
    │   ├── get-empleos.png
    │   ├── post-empleo-1.png
    │   ├── post-empleo-2.png
    │   ├── post-empleo-3.png
    │   ├── post-empleo-4.png
    │   ├── put-empleo.png
    │   ├── swagger-delete.png
    │   └── swagger-home.png
    ├── config/
    │   ├── app.php
    │   ├── auth.php
    │   ├── cache.php
    │   ├── database.php
    │   ├── filesystems.php
    │   ├── l5-swagger.php
    │   ├── logging.php
    │   ├── mail.php
    │   ├── queue.php
    │   ├── services.php
    │   └── session.php
    ├── database/
    ├── docker/
    │   ├── nginx/
    │   │   └── default.conf
    │   └── php/
    │       └── Dockerfile
    ├── public/
    ├── resources/
    ├── routes/
    ├── storage/
    ├── tests/
    ├── vendor/
    ├── .editorconfig
    ├── .env
    ├── .env.example
    ├── .gitattributes
    ├── .gitignore
    ├── artisan
    ├── composer.json
    ├── composer.lock
    ├── docker-compose.yaml
    ├── package.json
    ├── phpunit.xml
    ├── postcss.config.js
    ├── README.md
    ├── tailwind.config.js
    └── vite.config.js
```

---

# Configuración y Ejecución del Proyecto

## 1. Clonar el repositorio

```bash
git clone URL_DEL_REPOSITORIO
```

---

## 2. Ingresar al proyecto

```bash
cd eva3_proviemplea/backend
```

---

## 3. Levantar contenedores Docker

```bash
docker compose up -d --build
```

---

## 4. Verificar contenedores activos

```bash
docker ps
```

---

## 5. Ejecutar migraciones

```bash
docker compose exec app php artisan migrate
```

---

# URLs del Proyecto

## Laravel

```plaintext
http://localhost:8080
```

---

## Swagger

```plaintext
http://localhost:8080/api/documentation
```

---

# Endpoints de la API

| Método | Endpoint          | Descripción               |
| ------ | ----------------- | ------------------------- |
| GET    | /api/empleos      | Obtener todos los empleos |
| POST   | /api/empleos      | Crear un empleo           |
| PUT    | /api/empleos/{id} | Actualizar un empleo      |
| DELETE | /api/empleos/{id} | Eliminar un empleo        |

---

# Ejemplo de JSON para Crear Empleo

```json
{
    "titulo": "Backend Developer",
    "descripcion": "Desarrollo con Laravel y Docker",
    "empresa": "ProviEmplea",
    "ubicacion": "Santiago",
    "salario": 1200000
}
```

---

# Evidencias del Proyecto

## Swagger principal

![Swagger Home](capturas/swagger-home.png)

---

## Swagger DELETE

![Swagger Delete](capturas/swagger-delete.png)

---

## GET empleos

![GET Empleos](capturas/get-empleos.png)

---

## POST empleo 1

![POST Empleo 1](capturas/post-empleo-1.png)

---

## POST empleo 2

![POST Empleo 2](capturas/post-empleo-2.png)

---

## POST empleo 3

![POST Empleo 3](capturas/post-empleo-3.png)

---

## POST empleo 4

![POST Empleo 4](capturas/post-empleo-4.png)

---

## PUT empleo

![PUT Empleo](capturas/put-empleo.png)

---

## DELETE empleo

![DELETE Empleo](capturas/delete-empleo.png)

---

## Docker Containers

![Docker Containers](capturas/docker-containers.png)

---

# Pruebas Realizadas

Las pruebas de la API fueron realizadas utilizando Postman y Swagger.

Se verificó el correcto funcionamiento de:

- GET
- POST
- PUT
- DELETE

También se comprobó:

- Funcionamiento de Docker
- Funcionamiento de MySQL
- Documentación automática con Swagger
- Respuestas JSON de la API

---

# Resultado Final

El proyecto quedó completamente funcional, ejecutándose mediante contenedores Docker y permitiendo la administración completa de empleos mediante una API REST desarrollada con Laravel 11.

---

# Autor

Alexandra Nilo
