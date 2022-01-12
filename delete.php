<?php
    session_start();
    if(isset($_GET["id"])){
        include 'connect.php';

        $connect->query("DELETE FROM wisata WHERE Id_wisata = ".$_GET["id"]);  
    }
    header("location:home_admin.php");
    exit();
?>
