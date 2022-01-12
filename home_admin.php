<?php
include("connect.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok 3 2018C</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        #logo {
            height: 100px;
        }

        .animate {
            -webkit-animation: animatezoom 0.9s;
            animation: animatezoom 0.9s
        }

        @-webkit-keyframes animatezoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes animatezoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        .closebtn {
            position: absolute;
            color: black;
            font-size: 35px;
            cursor: pointer;
            background-color: white;
        }


        .rowGallery:after {
            content: "";
            display: table;
            clear: both;
        }


        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Add a pointer when hovering over the thumbnail images */
        .cursor {
            cursor: pointer;
        }


        /* Container for image text */
        .caption-container {
            text-align: center;
            background-color: #222;
            padding: 2px 16px;
            color: white;
        }

        /* Six columns side by side */
        .column {
            float: left;
            width: 16.66%;
        }

        /* Add a transparency effect for thumnbail images */
        .demo {
            opacity: 0.6;
        }

        .active,
        .demo:hover {
            opacity: 1;
        }
    </style>


</head>

<body>
    <!-- navbar -->
    <nav class="navbar-fixed-top animate" style="background-color: black; opacity: 80%;">
        <div class="container" id="navbar">
            <div class="collapse navbar-collapse" id="navcol-1" style="margin-top: 10px;">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="#home">HOME</a></li>
                    <li role="presentation"><a href="#macam_wisata">NEWS</a></li>
                    <li role="presentation"><a href="#gallery">GALLERY</a></li>
                    <li role="presentation"><a href="#team">ABOUT</a></li>
                    <!-- <li role="presentation"><a href="#"><i class="glyphicon glyphicon-search"></i></a></li> -->
                    <li role="presentation">
                        <form class="form-inline" action="index.php" method="get">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="cari">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </form>
                        <br>
                        <?php
                        if (isset($_GET['cari'])) {
                            $cari = $_GET['cari'];
                        }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar -->

    <!-- jumbotron -->
    <div class="animate" id="background">
        <div class="jumbotron" style="padding-top: 70px;">
            <div class="navbar-header">
                <a href="#" class=""><img src="assets/img/logokelompok3.png " id="logo"></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <h1 style="padding-top: 100px;">Wonderful Yogyakarta</h1>
            <p><i>Yogyakarta adalah destinasi wisata paling populer di Indonesia setelah Bali.
                    Apa yang membuat Jogja begitu istimewa sampai dikunjungi jutaan orang setiap tahun?
                    Temukan info wisata Jogja terbaik di sini.</i></p>
        </div>
    </div>
    <!-- jumbotron -->

    <!-- container atas -->
    <div class="animate" id="home">
        <div class="isi">
            <div class="container atas">
                <h1>Keistimewaan Tempat Wisata Di Yogyakarta</h1>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <i class="glyphicon glyphicon-map-marker"></i>
                        <h3>STRATEGIC</h3>
                        <p class="text-justify"><strong>Yogyakarta </strong>adalah kota yang sangat strategis karena banyak sekali
                            tempat wisata yang ada di kota ini. Kota pelajar satu ini memang selalu melekat di hati pengunjungnya.
                            Bagaimana tidak? Jogja adalah kota dengan paket wisata lengkap baik wisata alam, edukasi, kuliner,
                            belanja, semua dapat ditemukan. Karena itu, banyak sekali wisatawan yang tertarik dengan kota ini.</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <i class="glyphicon glyphicon-tree-conifer"></i>
                        <h3>CLIMATE</h3>
                        <p class="text-justify"><strong>Yogyakarta </strong>memiliki iklim yang panas ketika musim kemarau. Secara
                            umum, rata-rata curah hujan tertinggi di Kota Yogyakarta yaitu sebanyak 692.50 mm3. Kelembaban udara
                            rata-rata cukup tinggi, terendah terjadi pada bulan Agustus tahun 2019 sebesar 81 persen. Tahun 2019
                            rata-rata tekanan udara sebesar 995.66 mb dan suhu udara rata-rata 26,05oC.</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <i class="glyphicon glyphicon-camera"></i>
                        <h3>EXOTIC</h3>
                        <p class="text-justify"><strong>Yogyakarta </strong>Merupakan kota yang eksotik dan berbudaya. Pegunungan,
                            pantai-pantai, hamparan sawah yang hijau dan udara yang sejuk menghiasi keindahan kota Jogja. Tidak
                            diherankan bila kota Jogja sangat terkenal dan merupakan salah satu tujuan utama para wisatawan
                            mancanegara, untuk berlibur dan menghabiskan sisa waktu istirahatnya di Jogja.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container atas -->

    <!-- container bawah -->
    <div class="container bawah" id="macam_wisata">
        <h1 style="margin-bottom: 30px;">Berbagai Macam Tempat Wisata Di Yogyakarta</h1>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="img-circle" src="assets/img/pantaisinden.jpg" width="200px">
                <h3>WISATA ALAM</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="img-circle" src="assets/img/Wisata-Kuliner-Yogyakarta.png" width="200px">
                <h3>WISATA KULINER</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="img-circle" src="assets/img/candi-prambanan.jpg" width="200px">
                <h3>WISATA KESEJARAHAN</h3>
            </div>
        </div>
    </div>
    <!-- container bawah -->

    <!-- container wisata -->
    <div id="news">
        <div class=" container">
            <a href="insert.php">
                <button class=" btn btn-default" style="margin-top: 10px;" type="button">Add Wisata</button>
            </a>
            <div class="row" style="padding-top: 1cm;">
                <?php
                include 'connect.php';
                $getWisata = $connect->query("SELECT * FROM wisata");
                while ($fetchWisata = $getWisata->fetch_assoc()) {
                ?>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="thumbnail newsed"><img src="<?= $fetchWisata["wisata_image"] ?>" style="height: 200px; object-fit: cover;">
                            <div class="caption">
                                <h3 class="judul" style="font-size: 22px;"><?= $fetchWisata["Judul_wisata"] ?></h3>
                                <h5 style="font-size: 16px;"> <?= $fetchWisata["alamat_wisata"] ?></h5>
                                <p class="descriptionWisata" style="height: 1cm;"><?= $fetchWisata["info_wisata"] ?></p>
                                <!-- <button class="myBtnModal">Read more</button><br> -->
                                <!-- <button class="btn btn-default" id="read1" type="button" onclick="read1()">Read More</button><br> -->
                                <a href="update.php?id=<?= $fetchWisata["Id_wisata"] ?>">
                                    <button class="btn btn-default" style="margin-top: 10px;" type="button">Update</button>
                                </a>
                                <a href="delete.php?id=<?= $fetchWisata["Id_wisata"] ?>">
                                    <button class=" btn btn-default" style="margin-top: 10px;" type="button">Delete</button>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- container wisata -->

    <!-- gallery -->
    <div id="gallery">
        <div class="container">
            <h1>Gallery</h1>
            <div class="container">
                <?php
                include 'connect.php';
                $getWisata = $connect->query("SELECT * FROM wisata");
                while ($fetchWisata = $getWisata->fetch_assoc()) {
                ?>
                    <div class="mySlides">
                        <img src="<?= $fetchWisata["wisata_image"] ?>" style="width:100%; height: 500px; object-fit: cover;">
                    </div>
                <?php
                }
                ?>

                <div class="rowGallery ">
                    <?php
                    include 'connect.php';
                    $getWisata = $connect->query("SELECT * FROM wisata");
                    $index = 1;
                    while ($fetchWisata = $getWisata->fetch_assoc()) {
                    ?>
                        <div class="column">
                            <img class="demo cursor" src="<?= $fetchWisata["wisata_image"] ?>" style="width:100%; height: 100px; object-fit: cover;" onclick="currentSlide(<?= $index ?>)" alt="<?= $fetchWisata["Judul_wisata"] ?>">
                        </div>
                    <?php
                        $index++;
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <!-- gallery -->

    <!-- container team -->
    <div id="team">
        <div class="container">
            <h1 id="footer">Meet The Team</h1>
            <div class="row">
                <a href="https://www.instagram.com/sulistio_sanjaya/?hl=id" target="_blank">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="thumbnail"><img class="img-circle" src="assets/img/profil_tio.jpg" style="padding: 20px;">
                            <div class="caption">
                                <h3 style="font-size: 22px;">Sulistio Sanjaya</h3>
                                <p class="text-center">CEO & Founder</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="https://www.instagram.com/tsaqif.aushaff10/?hl=id" target="_blank">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="thumbnail"> <img class="img-circle" src="assets/img/profil_tsaqif.jpg" style="padding: 20px;">
                            <div class="caption">
                                <h3 style="font-size: 22px;">Tsaqif Aushaf Farodis</h3>
                                <p class="text-center">Project Manager</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="https://www.instagram.com/realkiaile/?hl=id" target="_blank">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="thumbnail"><img class="img-circle" src="assets/img/profil_musa.jpg" style="padding: 20px;">
                            <div class="caption">
                                <h3 style="font-size: 22px;">Musafak</h3>
                                <p class="text-center">System Analys</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="https://www.instagram.com/nurfajarismail/?hl=id" target="_blank">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="thumbnail"><img class="img-circle" src="assets/img/profil_fajar.jpg" style="padding: 20px;">
                            <div class="caption">
                                <h3 style="font-size: 22px;">Nur Fajar Ismail</h3>
                                <p class="text-center">UI/UX Designer</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="row">
            <a href="https://www.instagram.com/4k1117/?hl=id" target="_blank">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="thumbnail"><img class="img-circle" src="assets/img/profil_arya1.jpg" style="padding: 20px;">
                            <div class="caption">
                                <h3 style="font-size: 22px;">Abdul Eriawan Nahar</h3>
                                <p class="text-center">Front-End Developer</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="https://www.instagram.com/vyaninsyanurmuhammad/?hl=id" target="_blank">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="thumbnail"><img class="img-circle" src="assets/img/profil_vyan.jpg" style="padding: 20px;">
                            <div class="caption">
                                <h3 style="font-size: 22px;">Vyan Insyah Nur</h3>
                                <p class="text-center">Back-End Developer</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="https://www.instagram.com/miftahjailanii/?hl=id" target="_blank">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="thumbnail"><img class="img-circle" src="assets/img/miftah.jpg" style="padding: 20px;">
                            <div class="caption">
                                <h3 style="font-size: 22px;">Miftah Jailani Nasution</h3>
                                <p class="text-center">Tester</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="https://www.kemenparekraf.go.id/" target="_blank">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <div class="thumbnail"><img class="img-circle" src="assets/img/Kemenparekraf.png" style="margin-top: 20px; margin-bottom: 5px; height:6cm">
                            <div class="caption">
                                <h3 style="font-size: 22px;">Kemenparekraf</h3>
                                <p class="text-center">Bussiness Partner</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- container team -->

    <!-- about -->
    <div id="about">
        <div class="container footer">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <?php
                if (isset($_COOKIE["adminID"])) {
                    $getUserLoggedIn = $connect->query("SELECT * FROM admin WHERE adminID = '" . $_COOKIE["adminID"] . "'")->fetch_assoc();
                ?>
                <?php

                } else {
                ?>
                <?php
                }
                ?>
                <h1> <img src="assets/img/logokelompok3.png" width="180px"></h1>
                <h2>Punya pertanyaan ?</h2>
                <p>Silahkan kirim pertanyaan atau masukan ke email berikut !</p>
                <a href="https://mail.google.com/mail/u/0/#sent?compose=GTvVlcSPFdVqdzgdfJnXJQPVllSKQRxxJDHHrVHjtGsNTFpZLThrNPdTHgZlBwFcNJQmSlNmlHDvW" target="_blank">tsaqifarodis@gmail.com</a>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h2>Newsletter Subscription</h2>
                <div class="input-group input-group-lg">
                    <input type="text" class="form-control" value="Your Email">
                    <div class="input-group-btn">
                        <button class="btn btn-primary" type="submit">Subscribe </button>
                    </div>
                </div>
                <div id="icon">
                    <a href="https://www.instagram.com/wisatadiyogyakarta/?hl=id" target="_blank" style="color: white;"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCT20SfbVmrz-qA7f23nYlXg/featured" target="_blank" style="color: white;"><i class="fa fa-youtube-play"></i></a>
                    <a href="https://www.facebook.com/jelajahwisatajogja" target="_blank" style="color: white;"><i class="fa fa-facebook-official"></i></a>
                </div>
                <a href="logout.php">
                    <button id="login" class="btn btn-primary" type="submit">Log out</button>
                </a>
                <a href="index.php">
                    <button id="login" class="btn btn-primary" type="submit">Ke Halaman User</button>
                </a>
            </div>
        </div>
    </div>
    <!-- about -->
    <a href="#" class="ignielToTop"></a>
    <!-- kaki -->
    <div id="kaki">
        <div class="container">
            <h5 class="text-center">Copyright © 2020 | Powered by Kelompok-3 2018-C</h5>
        </div>
    </div>
    <!-- kaki -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        function validateCard() {
            var strdeskripsi = document.getElementsByClassName("descriptionWisata");
            var bttn = document.getElementsByClassName("myBtnModal");
            var arrayNews = document.getElementsByClassName("newsed");
            var judul = document.getElementsByClassName("judul");


            for (let index = 0; index < arrayNews.length; index++) {
                var panjang = judul[index].textContent;
                var split = panjang.split("");
                if (panjang.length >= 15) {
                    var revjudul = "";
                    for (let a = 0; a < 15; a++) {
                        revjudul += split[a];

                    }
                    judul[index].innerHTML = revjudul + "...";
                    bttn[index].style.visibility = 'visible';

                } else if (panjang.length < 15) {
                    bttn[index].style.visibility = 'hidden';
                }
            }

            for (let index = 0; index < arrayNews.length; index++) {
                var panjang = strdeskripsi[index].textContent;
                var split = panjang.split("");
                if (panjang.length >= 17) {
                    var revdes = "";
                    for (let a = 0; a < 17; a++) {
                        revdes += split[a];
                        bttn[index].style.visibility = 'hidden';

                    }
                    strdeskripsi[index].innerHTML = revdes + `...`;
                    bttn[index].style.visibility = 'visible';

                } else if (panjang.length < 15) {
                    bttn[index].style.visibility = 'hidden';
                }
            }
        }

        validateCard();

        function showImg(imgs) {
            var expandImg = document.getElementById("expandedImg");
            var imgText = document.getElementById("imgtext");
            expandImg.src = imgs.src;
            imgText.innerHTML = imgs.alt;
            expandImg.parentElement.style.display = "block";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>
</body>

</html>