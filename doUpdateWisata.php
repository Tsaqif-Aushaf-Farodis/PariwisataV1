<?php
    session_start();
    if(isset($_POST["Judul_wisata"])){
        include 'connect.php';



    $Id_wisata = $_POST["id"];
    $Judul_wisata = $_POST["Judul_wisata"];
    $info_wisata = $_POST["info_wisata"];
    $alamat_wisata = $_POST["alamat_wisata"];
    $wisata_image = $_FILES["wisata_image"];

    $message    = "";

    if($Judul_wisata==""){
        $message = "Judul wisatata must be filled!";
    }else if($info_wisata==""){
        $message = "info wisata must be filled!";
    }else if($alamat_wisata==""){
        $message = "alamat wisata must be filled!";
    }else{

        if(isset($wisata_image["tmp_name"]) && $wisata_image["tmp_name"]!=""){
        $filePath = "img/".basename($wisata_image["name"]);
        move_uploaded_file($wisata_image["tmp_name"], $filePath);

        $connect->query("UPDATE wisata SET wisata_image='".$filePath."' WHERE Id_wisata = ".$Id_wisata);
        }

        $connect->query("UPDATE wisata SET Judul_wisata='".$Judul_wisata."', info_wisata='".$info_wisata."', alamat_wisata='".$alamat_wisata."' WHERE Id_wisata=".$Id_wisata);
        $message = "Succesfully Edit new wisata!";
    }
    $_SESSION["message"] = $message;
    header("location:home_admin.php?id=".$Id_wisata);
    exit();
}
header("location:insert.php");
exit();
