# ARI Framework

**ARI Framework** is a lightweight PHP micro-framework based on the **Model-View-Controller (MVC)** architectural pattern, designed to streamline the development of structured web applications.

---

## 📌 What is it?

ARI Framework is a simple and efficient tool for PHP web development. It's ideal for projects that need a clean structure without the overhead of larger frameworks. It was built to promote organized, maintainable, and scalable code.

---

## ⚙️ What does it do?

This framework enables you to build web applications following the **MVC pattern**, clearly separating business logic, presentation, and control flow. It also includes useful utilities and libraries to speed up development.

---

## 📖 Developer Guide

Source code is available on GitHub:  
👉 [https://github.com/arielcr/ari-framework](https://github.com/arielcr/ari-framework)

---

### 🔧 1. Installation

1. **Copy the files to your web server**

   - For local development, place the files in a subfolder that can be accessed like:  
     `http://localhost/myapp`
   - For production, open `/lib/common/Dispatcher.php`:
     - **Uncomment** line 8
     - **Comment out** line 9

2. **Update the configuration**

   - Edit `/config/config.inc.php` with the correct:
     - **Database credentials**
     - **Base URL**

3. **Ensure `mod_rewrite` is enabled**

   - Apache's `mod_rewrite` module must be active for URL routing to work.

---

### 📁 2. Directory Structure

```text
+---app              # Main application
|   +---controller   # Controllers
|   +---language     # Language files
|   +---model        # Database logic
|   +---object       # Additional classes
|   +---view         # Views (templates)
+---config           # Configuration files
+---css              # Stylesheets
+---doc              # Documentation
+---image            # Images
+---js               # JavaScript libraries
+---lib              # Framework core
    +---common
    +---helper
```

**Key folder descriptions:**

- `app/controller/`: Contains site logic. Controllers load data from the model and pass it to views.
- `app/model/`: Handles all database interactions.
- `app/view/`: Templates where data is presented.
- `app/language/`: Language files for internationalization.
- `app/object/`: Helper or domain-specific classes.

---

### 🌐 3. URL Structure

The application uses clean URLs in the following format:

```
http://yourdomain.com/<controller>/<method>/<parameter>
```

- `<controller>`: The controller name (lowercase, without the word `Controller`)
- `<method>`: The method to execute. Defaults to `index` if omitted.
- `<parameter>`: Optional parameter passed to the method.

**Example:**

```
http://yourdomain.com/user/profile/123
```

This will call the `profile` method in the `UserController` with `123` as a parameter.

---

### 🚀 4. Example Application

The repository includes a functional example app to help you understand the framework’s structure and usage.

---

## 🧑‍💻 Author

Developed by **Ariel Orozco Rivera**  
👨‍💻 Senior Software Engineer | Backend Developer | 10+ years of experience in PHP and Go

---

## 📜 License

This project is released under the MIT License.  
See the `LICENSE` file for more information.

---
