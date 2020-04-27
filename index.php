<?php
    if(!$_GET["page"]){
        header("location:index.php?page=home");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PT. Pindad (Persero) - Home</title>
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <?php
            echo "<link rel='stylesheet' href='css/".$_GET["page"].".css'>";
        ?>
        <link rel="stylesheet" href="css/main.css">
        <!--JQuery and Bootstrap lib-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid row head">
            <div class="dropdown open top-layer ml-auto py-1 mx-2">
                <a class="text-light" id="dropdown-perusahaan" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                            PERUSAHAAN
                </a>
                <div class="dropdown-menu head top-layer" aria-labelledby="dropdown-perusahaan">
                    <div class="dropdown">
                        <a class="dropdown-item top-layer" type="button" id="dropdown-dropdown" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                    <i class="fa fa-caret-left" aria-hidden="true"></i>
                                    Tentang Perusahaan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-dropdown">
                            <a class="dropdown-item" href="index.php?page=vision-and-mission">Visi Dan Misi</a>
                            <a class="dropdown-item" href="index.php?page=company-objective-and-target">Tujuan Dan Sasaran Perusahaan</a>
                            <a class="dropdown-item" href="index.php?page=corporate-culture">Budaya Perusahaan</a>
                            <a class="dropdown-item" href="index.php?page=business-field-and-business-development">Bidang Usaha Dan Perkembangan Usaha</a>
                            <a class="dropdown-item" href="index.php?page=legality">Legalitas</a>
                            <a class="dropdown-item" href="index.php?page=law-and-regulation">Peraturan Dan Ketentuan Perusahaan</a>
                            <a class="dropdown-item" href="index.php?page=quality-and-environment">Sistem Managemen Mutu Dan Komitmen Terhadap Lingkungan</a>
                            <a class="dropdown-item" href="index.php?page=finance">Keuangan</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-item top-layer" type="button" id="dropdown-dropdown" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fa fa-caret-left" aria-hidden="true"></i>
                                Sejarah
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-dropdown">
                            <a class="dropdown-item" href="index.php?page=masa-kolonial-belanda-dan-pendudukan-jepang">Masa Kolonial Belanda Dan Pendudukan Jepang</a>
                            <a class="dropdown-item" href="index.php?page=bagian-dari-tni-ad">Pindad Sebagai Bagian Dari TNI AD</a>
                            <a class="dropdown-item" href="index.php?page=pindad-sebagai-perseroan">Pindad Sebagai Perseroan</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-item top-layer" type="button" id="dropdown-dropdown" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fa fa-caret-left" aria-hidden="true"></i>
                                Managemen
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-dropdown">
                            <a class="dropdown-item" href="index.php?page=organization-structure">Struktur Organisasi</a>
                            <a class="dropdown-item" href="index.php?page=dewan-komisaris">Dewan Komisaris</a>
                            <a class="dropdown-item" href="index.php?page=komite-audit">Komite Audit</a>
                            <a class="dropdown-item" href="index.php?page=direksi">Direksi</a>
                            <a class="dropdown-item" href="index.php?page=sesper-dan-kepala-spi">Sesper Dan Kepala SPI</a>
                            <a class="dropdown-item" href="index.php?page=subsidiaries">Anak Perusahaan</a>
                        </div>
                    </div>
                    <a href="" class="dropdown-item top-layer">Tata Kelola Perusahaan & Managemen Risiko</a>
                    <div class="dropdown">
                        <a class="dropdown-item top-layer" type="button" id="dropdown-dropdown" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fa fa-caret-left" aria-hidden="true"></i>
                                Corporate Communication
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-dropdown">
                            <a class="dropdown-item" href="#">Achievement</a>
                            <a class="dropdown-item" href="#">Annual Report</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-item top-layer" type="button" id="dropdown-dropdown" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fa fa-caret-left" aria-hidden="true"></i>
                                Inovasi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-dropdown">
                            <a class="dropdown-item" href="#">Inovasi Baru</a>
                        </div>
                    </div>
                    <a href="" class="dropdown-item top-layer">E-LHKPN</a>
                </div>
            </div>
            <div class="dropdown open top-layer py-1 mx-2">
                <a class="text-light" id="dropdown-perusahaan" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                            KARIR
                </a>
                <div class="dropdown-menu head top-layer" aria-labelledby="dropdown-perusahaan">
                    <div class="dropdown">
                        <a href="" class="dropdown-item top-layer">Informasi Karir</a>
                    </div>
                </div>
            </div>
            <a class="py-1 mx-2" href=""><img src="img/flag-id.png" class="flag-icon" alt=""></a>
            <a class="py-1 mx-2" href=""><img src="img/flag-en.png" class="flag-icon" alt=""></a>
        </div>

        <nav class="navbar navbar-expand-sm fixed-top bg-custom">
            <a class="navbar-brand" href="#"><img src="img/navicon.png" class="img-fluid" alt=""></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active mx-1">
                        <a class="nav-link nav-singgle" href="index.php?page=home">HOME<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown mx-1">
                        <a class="nav-link text-center" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="dropdown-link">RUANG PUBLIK</span> 
                            <br>
                            <i class="fa fa-caret-down text-warning caret-link" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu text-center" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="index.php?page=news">BERITA</a>
                            <a class="dropdown-item" href="index.php?page=press-release">SIARAN PERS</a>
                            <a class="dropdown-item" href="index.php?page=pindad-in-news">PINDAD DALAM BERITA</a>
                            <a class="dropdown-item" href="index.php?page=majalah">MAJALAH</a>
                            <a class="dropdown-item" href="index.php?page=catalog-and-brochures">KATALOG DAN BROSUR</a>
                            <a class="dropdown-item" href="index.php?page=gallery">GALLERY</a>
                            <a class="dropdown-item" href="index.php?page=video">VIDEO</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown mx-1">
                        <a class="nav-link text-center" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="dropdown-link">PRODUK & JASA</span> 
                            <br>
                            <i class="fa fa-caret-down text-warning caret-link" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu text-center" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="index.php?page=weapon">SENJATA</a>
                            <a class="dropdown-item" href="index.php?page=ammunition">MUNISI</a>
                            <a class="dropdown-item" href="index.php?page=special-vehicles">KENDARAAN KHUSUS</a>
                            <a class="dropdown-item" href="index.php?page=forging-and-casting">TEMPA COR & ALAT PERKERETAAPIAN</a>
                            <a class="dropdown-item" href="index.php?page=alat-berat">ALAT BERAT</a>
                            <a class="dropdown-item" href="index.php?page=handakom">BAHAN PELEDAK KOMERSIAL</a>
                            <a class="dropdown-item" href="index.php?page=cyber-security">CYBER SECURITY</a>
                            <a class="dropdown-item" href="index.php?page=anak-perusahaan">ANAK PERUSAHAAN</a>
                            <a class="dropdown-item" href="index.php?page=inquiry-process">PROSEDUR PEMESANAN PRODUK INDUSTRIAL</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown mx-1">
                        <a class="nav-link text-center" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="dropdown-link">KIP</span> 
                            <br>
                            <i class="fa fa-caret-down text-warning caret-link" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu text-center" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="index.php?page=regulasi-keterbukaan-informasi-publik">REGULASI KETERBUKAAN INFORMASI PUBLIK                            </a>
                            <a class="dropdown-item" href="index.php?page=informasi-berkala">INFORMASI BERKALA</a>
                            <a class="dropdown-item" href="index.php?page=informasi-serta-merta">INFORMASI SERTA MERTA</a>
                            <a class="dropdown-item" href="index.php?page=informasi-setiap-saat">INFORMASI SETIAP SAAT</a>
                            <a class="dropdown-item" href="index.php?page=prosedur-permohonan-informasi">PROSEDUR PERMOHONAN INFORMASI</a>
                            <a class="dropdown-item" href="index.php?page=prosedur-pengajuan-keberatan">PROSEDUR PENGAJUAN KEBERATAN</a>
                            <a class="dropdown-item" href="index.php?page=prosedur-penyelesaian-sengketa-informasi">PROSEDUR PENYELESAIAN SENGKETA INFORMASI</a>
                            <a class="dropdown-item" href="index.php?page=laporan-layanan-informasi-publik">LAPORAN LAYANAN INFORMASI PUBLIK</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown mx-1">
                        <a class="nav-link text-center" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="dropdown-link">PENGADAAN</span> 
                            <br>
                            <i class="fa fa-caret-down text-warning caret-link" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu text-center" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">E_PROCUREMENT</a>
                            <a class="dropdown-item" href="index.php?page=procurement-info">INFORMASI PENGADAAN</a>
                        </div>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link nav-singgle" href="index.php?page=contact-us">HUBUNGI</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Include Disini -->
        <?php
            include("page/".$_GET["page"].".php");
        ?>
        <!-- -------------- -->

        <footer class="container-fluid grayLink footer1 p-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="col-md-12 p-3">
                            <img class="img-fluid" src="img/footer-logo.png" alt="">
                        </div>
                        <div class="col-md-12 grayColor">
                            PT. Pindad (Persero) adalah BUMN yang memiliki visi untuk menjadi produsen peralatan pertahanan dan keamanan terkemuka di Asia pada tahun 2023, melalui upaya inovasi produk dan kemitraan strategik.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-white my-4">
                            <h5 class=" font-weight-bold">QUICK LINKS</h5>
                        </div>
                        <div class="row">
                            <a href="#" class="col-md-12 p-2">Careers</a>
                            <a href="#" class="col-md-12 p-2">Contact</a>
                            <a href="#" class="col-md-12 p-2">Services</a>
                            <a href="#" class="col-md-12 p-2">Technology</a>
                            <a href="#" class="col-md-12 p-2">Latest News</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-white my-4">
                            <h5 class=" font-weight-bold">PRODUCT & SERVICES</h5>
                        </div>
                        <div class="row">
                            <a href="index.php?page=weapon" class="col-md-12 p-2">Senjata</a>
                            <a href="index.php?page=ammunition" class="col-md-12 p-2">Munisi</a>
                            <a href="index.php?page=special-vehicles" class="col-md-12 p-2">Kendaraan Khusus</a>
                            <a href="index.php?page=forging-and-casting" class="col-md-12 p-2">Tempa Cor & Alat Perkeretaapian</a>
                            <a href="index.php?page=alat-berat" class="col-md-12 p-2">Alat Berat</a>
                            <a href="index.php?page=handakom" class="col-md-12 p-2">Bahan Peledak Komersial</a>
                            <a href="index.php?page=cyber-security" class="col-md-12 p-2">Cyber Security</a>
                            <a href="index.php?page=anak-perusahaan" class="col-md-12 p-2">Anak Perusahaan</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-white my-4">
                            <h5 class=" font-weight-bold">LINK</h5>
                        </div>
                        <div class="row">
                            <a href="" class="col-md-12"><img src="img/bumn-button2.jpg" alt="" class="img-fluid"></a>
                            <a href="" class="col-md-12"><img src="img/untuknegeri5.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="row">
                            <a href="https://www.facebook.com/ptpindad?fref=ts" class="col-md-3"><i class="fab fa-facebook-f fa-sm fa-fw"></i></a>
                            <a href="https://twitter.com/PT_Pindad" class="col-md-3"><i class="fab fa-twitter fa-sm fa-fw"></i></a>
                            <a href="https://www.youtube.com/channel/UCLqhC4mRKpK30xDSJhnt0FA" class="col-md-3"><i class="fab fa-youtube fa-sm fa-fw"></i></a>
                            <a href="https://instagram.com/pt_pindad" class="col-md-3"><i class="fab fa-instagram fa-sm fa-fw"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="container-fluid footer2 p-2">
            <div class="container">
                <div class="row grayLink">
                    <div class="col-md-8 grayColor">
                        Copyright © 2020 Pindad. All rights reserved.
                    </div>
                    <div class="col-md-2">
                        <a href="">Terms of use</a>
                    </div>
                    <div class="col-md-2">
                        <a href="">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>

        <a href="#" class="to-top bg-info"><i class="fa fa-angle-up text-light" aria-hidden="true"></i></a>
        
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/7b59756246.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.19/jquery.touchSwipe.min.js"></script>
        <script>
            $(window).scroll(function() {
                $(".caret-link").css({
                    transition : "all 700ms"
                });
               $("nav").toggleClass("scrolled shadow-sm", $(this).scrollTop() > 50);
               $(".nav-link").toggleClass("scrolled", $(this).scrollTop() > 50);
               $(".caret-link").toggleClass("scrolled", $(this).scrollTop() > 50);
               $(".to-top").toggleClass("scrolled", $(this).scrollTop() > 500);
            });

            $(".dropdown").hover(function(){
                $(".caret-link").css({
                    transition : "all 0ms"
                });
            });   

            $(".to-top").click(function () {
                $(body).scollTop() = 0;
            });       

            // var swiper = new Swiper('.swiper-container', {
            //     parallax: true,
            //     pagination: {
            //         el: '.swiper-pagination',
            //         clickable: true,
            //     },
            // });
            // var $a = document.getElementById("isNav");
            // window.onscroll = function() {scrollFunction()};

            
        </script>
        <!-- <script src="js/home.js"></script> -->
    </body>
</html>