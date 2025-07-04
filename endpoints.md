# 📌 Documentación de Endpoints - API Sistema de Inventario  

Este documento describe los endpoints disponibles en la API desarrollada para el sistema de inventario. 

## 👤 1. Registrar usuario 

- **URL:** :/localhost/sistema_inventario/api/usuarios/registrar.php
- **Método:** POST  
- **Tipo de contenido:** `application/json` 
-  
- **Descripción:** Registra un nuevo usuario en la base de datos. 
-  
**🔻JSON de entrada:**
 {
  "nombre": "Eunice",
  "correo": "eunice@gmail.com",
  "clave": "123456"
}


**🔺Respuesta:** 

{"mensaje":"Usuario registrado con éxito"}


Si el correo ya existe:
{"error": "Correo ya registrado"}


## 🔐 2. Iniciar sesión (login)  

- **URL:** (http://localhost/sistema_inventario/api/usuarios/login.php)
- **Método:** POST  
- **Tipo de contenido:** `application/json` 
-  
- **Descripción:** Verifica las credenciales del usuario.
-   
**🔻JSON de entrada:**
{
  "correo": "eunice@gmail.com",
  "clave": "123456"
}

**🔺Respuesta:**
{"mensaje": "login  exitoso","usuario": "Eunice"}



## 📦 3. Registrar producto  

- **URL:**(http://localhost/sistema_inventario/api/productos/producto.php)
- **Método:** POST  
- **Tipo de contenido:** `application/json` 
-  
- **Descripción:** Agrega un nuevo producto al inventario.  
- 
**🔻JSON de entrada:** 

{
  "nombre": "Teclado",
  "descripcion": "Teclado mecánico RGB",
  "cantidad": 5,
  "precio": 150000
}


**🔺Respuesta:** 
{ "mensaje": "Producto registrado correctamente"}


## 📋 4. Ver productos (listar inventario)  

- **URL:**(http://localhost/sistema_inventario/api/productos/listar.php)
- **Método:** GET 
-  
- **Descripción:** Devuelve una lista de todos los productos del inventario.  
- 
**🔺Respuesta:**
 {
    "id": 1,
    "nombre": "Monitor",
    "descripción": "Monitor LED 24 pulgadas",
    "cantidad": 5,
    "precio": 450
  },


