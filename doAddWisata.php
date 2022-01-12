<?php
    session_start();
    if(isset($_POST["Judul_wisata"])){
        include 'connect.php';

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

    }else if(!isset($wisata_image["tmp_name"]) || $wisata_image["tmp_name"]==""){
        $message = "wisata Image must be choosen!";

    }else{

        $filePath = "img/".basename($wisata_image["name"]);
        move_uploaded_file($wisata_image["tmp_name"], $filePath);

        $connect->query("INSERT INTO wisata VALUES (null, '".$Judul_wisata."','".$info_wisata."','".$alamat_wisata."','".$filePath."')");

        $message = "Succesfully added new wisata!";
    }

    $_SESSION["message"] = $message;
}
header("location:insert.php");
exit();
?>