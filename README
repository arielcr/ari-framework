# ARI Framework

**ARI Framework** es un micro framework en PHP basado en el patrón de arquitectura **Modelo-Vista-Controlador (MVC)**, diseñado para facilitar el desarrollo rápido y estructurado de aplicaciones web.

---

## 📌 ¿Qué es?

ARI Framework es una herramienta ligera y sencilla para el desarrollo web en PHP, ideal para proyectos que requieran una estructura clara sin la complejidad de frameworks más pesados. Fue creado con el objetivo de mantener el código organizado y facilitar la mantenibilidad de las aplicaciones.

---

## ⚙️ ¿Qué hace?

Este framework permite desarrollar sitios y aplicaciones web siguiendo el patrón **MVC**, separando claramente la lógica de negocios, la presentación y el control de flujo. Además, incluye librerías y utilidades comunes que aceleran el desarrollo.

---

## 📖 Guía para Desarrolladores

El código fuente está disponible en GitHub:  
👉 [https://github.com/arielcr/ari-framework](https://github.com/arielcr/ari-framework)

---

### 🔧 1. Instalación

1. **Copiar archivos al servidor web**

   - Para desarrollo local, ubicar los archivos dentro de una carpeta accesible vía navegador, por ejemplo:  
     `http://localhost/miapp`
   - Para producción, editar el archivo `/lib/common/Dispatcher.php`:
     - **Descomentar** la línea 8.
     - **Comentar** la línea 9.

2. **Editar configuración**

   - Modificar el archivo `/config/config.inc.php` con los datos correctos de:
     - **Base de datos**
     - **URL base del proyecto**

3. **Verificar `mod_rewrite`**

   - Asegúrate de que el módulo **mod_rewrite** esté habilitado en tu servidor Apache.

---

### 📁 2. Estructura de Directorios

```text
+---app              # Aplicación principal
|   +---controller   # Controladores
|   +---language     # Archivos de idioma
|   +---model        # Acceso a datos
|   +---object       # Clases auxiliares
|   +---view         # Vistas (plantillas)
+---config           # Configuración general
+---css              # Hojas de estilo
+---doc              # Documentación
+---image            # Imágenes
+---js               # Librerías JavaScript
+---lib              # Código del framework
    +---common
    +---helper
```

**Descripción de carpetas clave:**

- `app/controller/`: Lógica de control. Carga datos del modelo y los pasa a la vista. Realiza operaciones y transacciones necesarias.
- `app/model/`: Capa de acceso a datos. Contiene todas las consultas a la base de datos.
- `app/view/`: Plantillas HTML/PHP donde se muestran los datos.
- `app/language/`: Archivos de texto para internacionalización.
- `app/object/`: Clases adicionales definidas por el desarrollador.

---

### 🌐 3. Estructura de la URL

Las URLs tienen el siguiente formato:

```
http://tudominio.com/<controlador>/<método>/<parámetro>
```

- `<controlador>`: Nombre del controlador (en minúsculas, sin la palabra `Controller`)
- `<método>`: Nombre del método a ejecutar. Si se omite, se usa `index` por defecto.
- `<parámetro>`: Parámetro opcional pasado al método del controlador.

**Ejemplo:**

```
http://tudominio.com/usuario/perfil/123
```

Esto llama al método `perfil` del controlador `UsuarioController` con el parámetro `123`.

---

### 🚀 4. Aplicación de Ejemplo

El repositorio incluye una aplicación de ejemplo funcional para ayudarte a comprender el funcionamiento general del framework.

---

## 🧑‍💻 Autor

Desarrollado por **Ariel Orozco Rivera**  
👨‍💻 Ingeniero en Sistemas | Backend Developer | +10 años de experiencia en PHP y Go

---

## 📜 Licencia

Este proyecto se distribuye bajo la licencia MIT.  
Consulta el archivo `LICENSE` para más detalles.

---
