<?php
    include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dependencies\css\all.min.css">
    <link rel="stylesheet" href="dependencies\css\fontawesome.min.css">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dependencies\bootstrap\bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- main conteinr -->
     <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="row main-card shadow-lg">
            <div class="col-md-6 p-5 text-white d-flex flex-column justify-content-center align-items-center text-center">
                        <h1>Welcome Page</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore aliquam, amet ab autem consequuntur ducimus consequatur distinctio voluptatibus ut. Ad totam at repellat doloremque dolorum accusantium maxime, ullam accusamus provident.</p>
                        <div class="social-icons d-flex flex-column justify-content-center align-items-center">
                            <p class="mt-5">_______ Get Connected With ______</p>
                            <div class="d-flex gap-3">
                                <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="text-white"><i class="fab fa-google"></i></a>
                                <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                </div>

        <!-- login column -->
        <div class="second-column col-md-6 bg-white p-5">
                <div class="d-flex justify-content-end mb-4">
                    <button class="btn btn-link sign_in_btn" onclick="window.location.href='login.php'">Sign In</button>
                    <button class="btn px-4 btn_pink" onclick="window.location.href='signup.php'">Register</button>
                </div>
                <h2 class="fw-bold mb-4">Sign In</h2>
                <form id="loginForm" method="POST" action="index.php">
                    <div class="form-container d-flex flex-column gap-2">


                        <label for="Email">Email</label>
                            <input type="email" id="email" name="Email" placeholder="Enter Your Email" required>


                        <label for="Password">Password</label>
                            <div class="password-container d-flex">
                                <input type="password" id="password" name="Password" placeholder="Enter Your Password" required style="width: 100%;">

                                <button id="password_show_btn" type="button" onclick="togglePassword()">
                                    <i id="eyeIcon" class="fa-solid fa-eye"></i>
                                </button>
                            </div>
                        
                        <div class="d-flex justify-content-between align-items-center">
                            <label>
                                <input type="checkbox" id="terms" name="Terms" required>
                                <span>Remember Me</span>
                            </label>
                            <a href="forget_password.html" class="text-decoration-none">Forgot Password?</a>
                        </div>

                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn_pink px-5 mt-4" id="login_btn" name="login">Login</button>
                    </div>
                </form>

            </div>
     </div>
    </div>
    
<script src="index.js"></script>
</body>
</html>