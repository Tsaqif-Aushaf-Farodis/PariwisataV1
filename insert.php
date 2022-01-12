<?php
session_start();
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

    <h3>Input Data Wisata</h3>

    <div class="container">
        <form action="doAddWisata.php" method="post" enctype="multipart/form-data">
            <label for="JudulW">Judul Wisata</label>
            <input type="text" id="Fjudul" name="Judul_wisata" placeholder="masukkan judul wisata...">

            <label for="AlamatW">Alamat Wisata</label>
            <input type="text" id="Falamat_wisata" name="alamat_wisata" placeholder="masukkan alamat wisata...">

            <label for="InfoW">Info Wisata</label>
            <textarea id="Finfo_wisata" name="info_wisata" placeholder="masukkan info wisata..." style="height:200px"></textarea>
            
            <label for="GambarW">Gambar Wisata</label>
            <input type="file" name="wisata_image">

            <a href="home_admin.php"><input type="submit" value="Submit"></a>
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

