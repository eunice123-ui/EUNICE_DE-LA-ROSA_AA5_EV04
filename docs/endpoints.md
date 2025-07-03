# 📌 Documentación de Endpoints - API Sistema de Inventario  

Este documento describe los endpoints disponibles en la API desarrollada para el sistema de inventario. 

## 👤 1. Registrar usuario 

- **URL:** `/usuarios/registrar.php`  
- **Método:** POST  
- **Tipo de contenido:** `application/json` 
-  
- **Descripción:** Registra un nuevo usuario en la base de datos. 
-  
**🔻JSON de entrada:**
 { 
  "nombre": "Juan Pérez",
 "correo": "juan@mail.com",
  "clave": "123456"
   } 

**🔺Respuesta:** 
{
  "mensaje": "Usuario registrado con éxito"
}
Si el correo ya existe:
{
  "error": "Correo ya registrado"
}


## 🔐 2. Iniciar sesión (login)  

- **URL:** `/usuarios/login.php`  
- **Método:** POST  
- **Tipo de contenido:** `application/json` 
-  
- **Descripción:** Verifica las credenciales del usuario.
-   
**🔻JSON de entrada:**
 {
  "correo": "juan@mail.com",
  "clave": "123456"
}

**🔺Respuesta:**
{
  "mensaje": "Login exitoso",
  "usuario": "Juan Pérez"
}

Si las credenciales son inválidas: 
{
  "error": "Credenciales incorrectas"
}


## 📦 3. Registrar producto  

- **URL:** `/productos/registrar.php`  
- **Método:** POST  
- **Tipo de contenido:** `application/json` 
-  
- **Descripción:** Agrega un nuevo producto al inventario.  
- 
**🔻JSON de entrada:** 
{
  "nombre": "Mouse inalámbrico",
  "descripcion": "Mouse Logitech M170",
  "cantidad": 20,
  "precio": 45000
}

**🔺Respuesta:** 
{
  "mensaje": "Producto registrado"
}


## 📋 4. Ver productos (listar inventario)  

- **URL:** `/productos/listar.php`  
- **Método:** GET 
-  
- **Descripción:** Devuelve una lista de todos los productos del inventario.  
- 
**🔺Respuesta:**
 [
  {
    "id": 1,
    "nombre": "Mouse inalámbrico",
    "descripcion": "Mouse Logitech M170",
    "cantidad": 20,
    "precio": "45000.00"
  },
  ...
]

