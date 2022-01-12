<?php
    $_host = "localhost";
    $_user = "root";
    $_pass = "";
    $_db   = "db_pariwisata";

    $connect = new mysqli($_host,$_user,$_pass,$_db);

    if($connect) {
        //echo "Sukses koneksi ke server!!";
    }else{
        echo "Gagal koneksi ke server!!";
        exit();
    }