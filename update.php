<?php
session_start();

if (!isset($_GET["id"])) {
    header("location:home.php");
    exit();
}

include 'connect.php';

$id = $_GET["id"];

$getData = $connect->query("SELECT * FROM wisata WHERE Id_wisata = " . $id);

if ($getData->num_rows == 0) {
    header("location:home_admin.php");
    exit();
}

$getData = $getData->fetch_assoc();

?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        input[type=text],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>

<body>

    <h3>Update Data Wisata</h3>

    <div class="container">
        <form action="doUpdateWisata.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $_GET["id"] ?>">

            <label for="JudulW">Judul Wisata</label>
            <input type="text" id="Fjudul" name="Judul_wisata" value="<?= $getData["Judul_wisata"] ?>" placeholder="masukkan judul wisata...">

            <label for="AlamatW">Alamat Wisata</label>
            <input type="text" id="Falamat_wisata" name="alamat_wisata" value="<?= $getData["alamat_wisata"] ?>" placeholder="masukkan alamat wisata...">

            <label for="InfoW">Info Wisata</label>
            <textarea id="Finfo_wisata" name="info_wisata" placeholder="masukkan info wisata..." style="height:200px"><?= $getData["info_wisata"] ?></textarea>

            <label for="GambarW">Gambar Wisata</label>
            <input type="file" name="wisata_image">

            <input type="submit" value="Submit">
        </form>
        <?php
        if (isset($_SESSION["message"])) {
            echo $_SESSION["message"];
            unset($_SESSION["message"]);
            header("location:home_admin.php");
        }
        ?>
    </div>

</body>

</html>
