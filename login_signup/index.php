<?php 
session_start();

include("connect.php");

if(isset($_POST["signup"])){
    $username = $_POST["UserName"];
    $email = $_POST["Email"];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Invalid email format";
    } else {
        // echo "Valid email format";
    }

    $password_user = $_POST["Password"];
    $terms = isset($_POST["Terms"]) ? 1 : 0;
// hash password
    $hased_password = password_hash($password_user, PASSWORD_DEFAULT);

    // check email already exsits?
    $check_email = "SELECT * FROM users WHERE email = '$email'";
    // execute email query 
    $email_check_result = mysqli_query($conn,$check_email);
    if(mysqli_num_rows($email_check_result) > 0){
        echo "Email already exists";
    }
    else{
        $sql = "INSERT INTO users (UserName,email,password,terms) VALUES ('$username','$email','$hased_password','$terms')";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "form submitted successfully";
            header("Location: login.php");
            exit();
        }
        else{
            echo "Data insertion failed : ".mysqli_error($conn);
        }
    }

}

if(isset($_POST["login"])){
    $email = mysqli_real_escape_string($conn, $_POST["Email"]);
    $password_user = $_POST["Password"];

    // 1. Search ONLY by email 
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if($row = mysqli_fetch_assoc($result)){
        // 2. Use password_verify to compare raw password with DB hash
        if(password_verify($password_user, $row['password'])){
            $_SESSION["email"] = $row["email"];
            $_SESSION["UserName"] = $row["UserName"];
            header("Location: homepage.php");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No account found with that email.";
    }
}



?>