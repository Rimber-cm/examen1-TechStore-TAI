# 🛍️ TechStore-TAI - API Laravel

[![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel)](https://laravel.com/)
[![Sanctum](https://img.shields.io/badge/Sanctum-3.x-92D8FF?style=for-the-badge)](https://laravel.com/docs/10.x/sanctum)
[![Postman](https://img.shields.io/badge/Postman-Tested-FF6C37?style=for-the-badge&logo=postman)](https://www.postman.com/)

---

## 📝 Descripción del Proyecto

API RESTful desarrollada con **Laravel** para la gestión de una tienda de tecnología. Incluye un sistema robusto de autenticación de usuarios mediante **Laravel Sanctum** y funcionalidades **CRUD** para la administración de productos y marcas.

---

## 🚀 Requisitos y Configuración

Antes de iniciar el proyecto, asegúrate de tener instaladas las siguientes herramientas:

* **PHP:** Versión 8.1 o superior
* **MySQL:** Versión 8.0 o superior
* **Composer:** Gestor de paquetes de PHP
* **Postman:** Para probar los endpoints de la API

### Pasos de Instalación

Sigue estos pasos para poner en marcha el proyecto:

1.  **Clona el repositorio:**
    ```bash
    git clone [https://github.com/Rimber-cm/examen1-TechStore-TAI.git](https://github.com/Rimber-cm/examen1-TechStore-TAI.git)
    cd examen1-TechStore-TAI
    ```

2.  **Instala las dependencias del proyecto:**
    ```bash
    composer install
    ```

3.  **Configura las variables de entorno:**
    Copia el archivo `.env.example` y renómbralo a `.env`. Luego, edita las credenciales de la base de datos.
    ```bash
    cp .env.example .env
    ```

4.  **Ejecuta las migraciones de la base de datos:**
    ```bash
    php artisan migrate
    ```

5.  **Inicia el servidor de desarrollo:**
    ```bash
    php artisan serve
    ```

---

## 📋 Endpoints de la API

La API expone los siguientes endpoints para su interacción. Las rutas de CRUD requieren un token de autenticación (`Bearer Token`).

### Autenticación
| Método | Endpoint | Descripción |
| :--- | :--- | :--- |
| `POST` | `/api/register` | Registra un nuevo usuario en el sistema. |
| `POST` | `/api/login` | Inicia sesión y devuelve un `access_token`. |

### Gestión de Marcas (Requiere Autenticación)
| Método | Endpoint | Descripción |
| :--- | :--- | :--- |
| `GET` | `/api/marcas` | Lista todas las marcas disponibles. |
| `POST`| `/api/marcas` | Crea una nueva marca. |
| `GET`| `/api/marcas/{id}` | Muestra una marca específica por ID. |
| `PUT`| `/api/marcas/{id}` | Actualiza una marca existente. |
| `DELETE`| `/api/marcas/{id}` | Elimina una marca por ID. |

### Gestión de Productos (Requiere Autenticación)
| Método | Endpoint | Descripción |
| :--- | :--- | :--- |
| `GET` | `/api/productos` | Lista todos los productos (incluye la relación con la marca). |
| `POST`| `/api/productos` | Crea un nuevo producto, requiriendo el `marca_id`. |
| `GET`| `/api/productos/{id}` | Muestra un producto específico por ID (incluye la marca). |
| `PUT`| `/api/productos/{id}` | Actualiza un producto existente. |
| `DELETE`| `/api/productos/{id}` | Elimina un producto por ID. |

---

## 📸 Evidencias

A continuación se presentan las evidencias del desarrollo y funcionamiento del proyecto.

### 1. Gestión del Proyecto (Trello)
![Tablero Kanban](/screenshots/trello.jpg)

### 2. Pruebas de Endpoints con Postman
| Autenticación | Marcas | Productos |
| :--- | :--- | :--- |
| ![Auth](/screenshots/registrousuarios.jpg) | ![Brands](/screenshots/creamarca.jpg) | ![Products](/screenshots/crearproducto.jpg) |

### 3. Diagrama de Base de Datos
![Diagrama BD](/screenshots/db.jpg)

---

## 📜 Licencia

Este proyecto está bajo la licencia MIT.

© 2023 - TechStore-TAI