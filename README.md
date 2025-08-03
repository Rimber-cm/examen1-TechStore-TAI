# 🛍️ TechStore-TAI - API Laravel

![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20) ![Sanctum](https://img.shields.io/badge/Sanctum-3.x-92D8FF) ![Postman](https://img.shields.io/badge/Postman-Tested-FF6C37)

API para gestión de productos y marcas con autenticación JWT.

## 📸 Evidencias Visuales

### 1. Gestión del Proyecto
![Tablero Kanban](/screenshots/trello.jpg)

### 2. Pruebas en Postman
| Autenticación | Marcas | Productos |
|---------------|--------|-----------|
| ![Auth](/screenshots/registrousuarios.jpg) | ![Brands](/screenshots/creamarca.jpg) | ![Products](/screenshots/crearproducto.jpg) |

### 3. Esquema de Base de Datos
![Diagrama BD](/screenshots/db.jpg)

---

## 🛠️ Instalación

```bash
# Clonar repositorio
git clone https://github.com/Rimber-cm/examen1-TechStore-TAI.git
cd examen1-TechStore-TAI

# Instalar dependencias
composer install

# Configurar .env (copiar y editar)
cp .env.example .env

# Migrar base de datos
php artisan migrate

# Iniciar servidor
php artisan serve
