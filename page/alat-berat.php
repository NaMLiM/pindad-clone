<link rel="stylesheet" href="css/template-2.css">

<div class="header-blog text-center" style="background-image: url(img/banner/Header_Alat_Berat.jpg);">
    <span class="garis"></span>
    <h1 class="display-5 text-light"><dt><b>ALAT BERAT</b></dt></h1>
</div>
<!---->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item font-weight-bold"><a href="index.php">Pindad</a></li>
        <li class="breadcrumb-item font-weight-bold"><a href="">Produk & Jasa</a></li>
        <li class="breadcrumb-item active" aria-current="page">Alat Berat</li>
    </ol>
</nav>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <div class="pb-5">
                <h5 class="font-weight-bold text-dark">Produk & Jasa</h5>
                <ul class="fa-ul list-aside my-3">
                    <li class="py-1"><a href="index.php?page=weapon">Senjata</a></li>
                    <li class="py-1"><a href="index.php?page=ammunition">Munisi</a></li>
                    <li class="py-1"><a href="index.php?page=special-vehicles">Kendaraan Khusus</a></li>
                    <li class="py-1"><a href="index.php?page=alat-berat" class="active">Alat Berat</a></li>
                    <li class="py-1"><a href="index.php?page=peralatan-industri-dan-jasa">Peralatan Industri dan Jasa</a></li>
                    <li class="py-1"><a href="index.php?page=infrastruktur-perhubungan">Infrastruktur Perhubungan</a></li>
                    <li class="py-1"><a href="index.php?page=layanan-pertambangan">Layanan Pertambangan</a></li>
                    <li class="py-1"><a href="index.php?page=cyber-security">Cyber Security</a></li>
                    <li class="py-1"><a href="index.php?page=anak-perusahaan">Anak Perusahaan</a></li>
                    <li class="py-1"><a href="index.php?page=inquiry-process">Prosedur Pemesanan Produk Industrial</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9 text-dark isi">
            <p>Divisi Alat Berat PT Pindad (Persero) adalah divisi yang menghasilkan produk-produk pendukung industri konstruksi, pertambangan, perkapalan, kelistrikan, dan pertanian. Produk dan jasa yang kami sediakan antara lain :</p>
            <p>Alat Berat, Mesin Listrik, Alat & Peralatan Kapal Laut (APKL), Alat & Mesin Pertanian (Alsintan), Jasa Permesinan</p>
            <p>Melalui transformasi kompetensi pada produk pertahanan yaitu sistem hydraulic dan roda rantai, PT Pindad menciptakan produk alat berat dengan merek Excava 200 yang memiliki kapasitas beban sebesar 20 Ton.</p>
            <p>Produk mesin listrik yang dihasilkan PT. Pindad meliputi generator dengan kapasitas sampai 15 MW, motor listrik yang terdiri dari produk motor traksi yang digunakan di kereta api listrik‚ motor magnet permanen, serta jasa perbaikan motor listrik. Produk mesin listrik PT Pindad telah digunakan di sebagian besar pembangkit listrik di Indonesia.</p>
            <p>Produk Peralatan Kapal Laut bermula dari kerjasama yang didirikan bersama Hatlapa. Pindad telah mengembangkan berbagai produk peralatan kapal laut sejak tahun 1991 hingga saat ini dengan merek PinMarine. Dengan dukungan Sumber Daya Manusia, sistem produksi dan kualitas kontrol yang baik, PinMarine mampu menghasilkan produk berkualitas dan kompetitif, serta memenuhi persyaratan klasifikasi Nasional & Internasional, seperti BKI, LR, ClassNK, BV, RINA, GL, ABS, dan lain-lain.</p>
            <p>Untuk mendukung sektor pertanian di Indonesia, PT Pindad bekerja sama dengan Kementerian Pertanian memproduksi alat dan mesin pertanian (alsintan) antara lain traktor roda empat (multiguna), rota tanam, dan combine multikomoditas.</p>
            <p>Jasa pemesinan didukung fasilitas mesin bubut horizontal dengan kapasitas hingga 6 meter, bubut vertikal hingga diameter 3 meter, double column‚ milling machine‚ dengan kapasitas hingga diatas 2 x 4 meter yang dioperasikan secara komputerisasi (CNC).</p>
            <p>Untuk pemesanan produk, silahkan kunjungi link berikut ini : <a href="https://pindad.com/inquiry-process">https://pindad.com/inquiry-process</a></p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <input type="text" class="search" name="search" placeholder="Quick Search">
        </div>
        <div class="col-md-9 row mb-5" id="produks">
            <?php
                $select = mysqli_query($connection, "select * from produk where jenis_produk='Alat Berat'");
                while($data = mysqli_fetch_array($select)){
                    ?>
                    <div class="col-md-3 mb-2 px-2 produks-card" data-target="<?php echo $data['kategori'] ?>">
                        <div class="card">
                            <div class="card-overlay">
                                <a href="admin/upload/<?php echo explode("-", $data["gambar"])[0]; ?>/gambar/<?php echo explode("-", $data["gambar"])[1] ?>" class="eye rounded-circle bg-orange text-white"><i class="fas fa-eye"></i></a>
                                <a href="index.php?page=view-product&&id=<?php echo $data["id_produk"] ?>" class="link rounded-circle bg-orange text-white"><i class="fas fa-link"></i></a>
                                <i class="fas fa-caret-up fa-2x panah-up"></i>
                            </div>
                            <img class="card-img-top" src="admin/upload/<?php echo explode("-", $data["gambar"])[0]; ?>/gambar/<?php echo explode("-", $data["gambar"])[1]; ?>">
                            <div class="card-body font-weight-bold nama-produk">
                                <?php echo $data["nama_produk"]; ?>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            ?>
        </div>
    </div>
</div>