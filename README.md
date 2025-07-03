## 📄  `README.md` — Descripción general del proyecto


# 🧰 API en PHP - Sistema de Inventario

Este proyecto corresponde a la evidencia **GA7-220501096-AA5-EV03** del programa de formación 
*Análisis y Desarrollo de Software* del SENA.

## 📌 Descripción

Es una API REST creada en PHP puro, que permite gestionar un sistema de inventario con funcionalidades básicas de:

- Registro de usuarios
- Inicio de sesión
- Registro de productos
- Consulta de inventario

## 🧑‍💻 Tecnologías usadas

- PHP 7.x
- MySQL
- PDO para conexión a base de datos
- JSON como formato de intercambio
- Visual Studio Code (editor)
- Git / GitHub (control de versiones)

## 📂 Estructura del proyecto

inventario_api/
│
├── db/ # Conexión a la base de datos
├── usuarios/ # Endpoints de usuarios
├── productos/ # Endpoints de productos
├── docs/ # Documentación (endpoints.md)
├── enlace_repositorio.txt
└── README.md



## 🚀 Cómo probar
usar  **Postman** para enviar peticiones `GET` y `POST` a los endpoints indicados en `docs/endpoints.md`.

### Ejemplo:

- Registrar usuario: `POST` a `http://localhost/inventario_api/usuarios/registrar.php`
- Listar productos: `GET` a `http://localhost/inventario_api/productos/listar.php`

## 🧪 Testing (ver Evidencia EV04)

Esta API será probada con Postman y documentada en una siguiente evidencia con capturas.

