#  Authify – PHP User Authentication System

Authify is a full-stack **user authentication system** built using **PHP, MySQL, HTML, CSS, and JavaScript**.
It allows users to register, log in, maintain sessions, and securely access a protected homepage.

---

##  Features

*  User Registration (Sign Up)
*  User Login (Sign In)
*  Password Hashing (Secure Storage)
*  Session Management
*  Logout Functionality
*  Email Validation (Frontend + Backend)
*  Password Show/Hide Toggle
*  Duplicate Email Check
*  Protected Homepage (Session-based access)
*  Clean UI with Bootstrap

---

##  Technologies Used

* HTML5
* CSS3
* JavaScript
* PHP (Core PHP)
* MySQL
* Bootstrap

---

##  Project Structure

```id="auth1"
project-folder/
│
├── login.php
├── signup.php
├── index.php
├── homepage.php
├── logout.php
├── connect.php
├── forget_password.html
├── style.css
├── index.js
│
├── images/
│   ├── pick_moon.jpg
│   └── signup.png
    └── login.png
    └── output_after_login.png
│
├── dependencies/
│   ├── bootstrap/
│   └── css/
```

---

##  Output Preview

The UI output of the project is available in:

```id="auth2"
images/signup.png
      └── login.png
      └── output_after_login.png
```

---

##  Setup Instructions

###  Start Server

* Install XAMPP / WAMP
* Start **Apache** and **MySQL**

---

###  Create Database

Open phpMyAdmin and run:

```sql id="auth3"
CREATE DATABASE signup_login;

USE signup_login;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    UserName VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    terms TINYINT(1),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

###  Run Project

* Move project folder to `htdocs`
* Open browser:

```id="auth4"
http://localhost/projects/login_signup/login.php
```

---

##  Security Features

* Password hashing using `password_hash()`
* Password verification using `password_verify()`
* Basic email validation
* Session-based authentication

---

##  Important Notes (For Improvement)

This project is for learning. For production:

* ❗ Use **prepared statements (PDO / MySQLi prepared)**
* ❗ Sanitize all inputs
* ❗ Implement CSRF protection
* ❗ Add stronger validation & error handling

---

##  Learning Concepts Covered

* Authentication systems (Login/Signup)
* PHP sessions
* Password hashing
* Form handling (POST method)
* MySQL database integration
* Frontend + Backend connection

---

##  Future Improvements

* Add **Forgot Password (Email OTP system)**
* Add **User Dashboard**
* Add **Profile Page**
* Implement **JWT authentication**
* Improve UI responsiveness

---

##  Author

Created by **Hafsa Tahir(Software Engineering Student)**

---

##  License

This project is free to use for learning and practice purposes.
