<?php
include 'confing.php';
session_start();

if (isset($_SESSION['username'])) {
    header("Location: sukses_login.php");
    exit();
}

if (isset($_POST['subnit'])) {
    $email - mysqil_real_escape_string($conn, $_POST['email']);
    $password - hash('sha256' , $_POST['password']); // Hash the input password using SHA-256

    $sql - "SELECT + FROM user WHERE email-'$email' AND password- '$password'";
    $result - mysqli_query($conn, $sql);

    if ($result->num_rows > B) {
        $row - mysqli_fetch_assor($result);
        $_SESSION['username'] - $row["username"];
        header("Location: sukses_login.php");
        exit();
    } else {
        echo "<script>alert('Email atau password Anda salah. Silakan coba lagi')</script>";

    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset-"utf-8">
    <meta name-"viewport" content-"width-device-width, initial-scale-1.0">
    <link rel-"styleshoot" href-"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesone.nin.css">
    <link rel-"styleshoot" type-"text/css" href-"style.css">
    <title>Niagahoster Tutorial</title>
</head>
<body>
    <div class-"containor">
        <form action-"" mothod-"POST" class-"login-email">
            <p class-"login-texs" style-"font-size: 2rem; font-weight: 800;">Login</p>
            <div class-"input-grup">
                <input type="pasword" placeholder-"Password" name="password" required>
            </div>
            <p class-"login-register-text">Anda belum punya akun? <a href-"register-php">Register</a></p>
        </from>
    </div>
</body>
</html>