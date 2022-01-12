<?php
session_start();
if (isset($_POST["inputEmail"])) {
    $email = $_POST["inputEmail"];
    $pass = $_POST["inputPassword"];

    if ($email == "") {
        $_SESSION["message"] = "Email harus diisi!";
        header("location:login.php");
        exit();

    } else if ($pass == "") {
        $_SESSION["message"] = "Password harus diisi!";
        header("location:login.php");
        exit();
        
    } else {

        include("connect.php");
        $result = $connect->query("SELECT * FROM admin WHERE userEmail LIKE '" . $email . "' AND userPassword LIKE '" . $pass . "'");

        if($result->num_rows==1){
            setcookie("adminID",$result->fetch_assoc()["adminID"]);
            header("location:home_admin.php");
            exit();

        }else{
            $_SESSION["message"] = "Akun tidak ditemukan!";
            header("location:login.php");
            exit();
        }
    }
} else {
    header("location:/");
    exit();
}
