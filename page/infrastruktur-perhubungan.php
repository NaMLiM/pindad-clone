<link rel="stylesheet" href="css/template-2.css">

<div class="header-blog text-center" style="background-image: url(img/banner/Forging.jpg);">
    <span class="garis"></span>
    <h1 class="display-5 text-light"><dt><b>INFRASTRUKTUR PERHUBUNGAN</b></dt></h1>
</div>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item font-weight-bold"><a href="index.php">Pindad</a></li>
        <li class="breadcrumb-item font-weight-bold"><a href="">Produk & Jasa</a></li>
        <li class="breadcrumb-item active" aria-current="page">Infrastruktur Perhubungan</li>
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
                    <li class="py-1"><a href="index.php?page=alat-berat">Alat Berat</a></li>
                    <li class="py-1"><a href="index.php?page=peralatan-industri-dan-jasa">Peralatan Industri dan Jasa</a></li>
                    <li class="py-1"><a href="index.php?page=infrastruktur-perhubungan" class="active">Infrastruktur Perhubungan</a></li>
                    <li class="py-1"><a href="index.php?page=layanan-pertambangan">Layanan Pertambangan</a></li>
                    <li class="py-1"><a href="index.php?page=cyber-security">Cyber Security</a></li>
                    <li class="py-1"><a href="index.php?page=anak-perusahaan">Anak Perusahaan</a></li>
                    <li class="py-1"><a href="index.php?page=inquiry-process">Prosedur Pemesanan Produk Industrial</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9 text-dark isi">
            <p>Divisi Infrastruktur Perhubungan merupakan bagian dari bisnis PT. Pindad (Persero) yang bertujuan untuk memenuhi permintaan dan mendukung pasar lokal maupun ekspor dalam bidang jasa pengecoran logam dan jasa tempa, mendukung pembangunan infrastruktur perkeretaapian Indonesia melalui produk-produk prasarana kereta api, serta mendukung kegiatan perkapalan melalui produk-produk peralatan kapal laut.</p>
            <p>Pindad mengawali bisnis dalam bidang Sarana dan Prasarana Kereta Api pada tahun 1983 dan mulai berproduksi pada tahun 1984 dengan memproduksi alat penambat rel tipe DE-Clips (DE-Clips Rail Fastener) yang merupakan lisensi dari Hollandia Kloos dan Ewem AG.</p>
            <p>Pada tanggal 23 September 1997, penandatanganan Perjanjian Kerja Sama Antara Pindad dan PT. KA menghasilkan litbang untuk produk alat penambat rel tipe KA-Clip dan hak kepemilikan PT. Kereta Api Indonesia (Persero). Pindad patent no ID 0 007 930 pada 19 April 2000 dikeluarkanlah ijin penggunaan KA-Clip dari Dirjen Perkeretaapian Departemen Perhubungan untuk digunakan pada proyek di lingkungan Direktorat Jenderal Perkeretaapian maupun di wilayah kerja PT. Kereta api Indonesia (Persero)</p>
            <p>Pada Januari 2008, pengembangan dilakukan kembali dengan memproduksi alat penambat rel type e-Clip kemudian dilakukan test track. Hingga pada tahun 2010 mendapat izin penggunaan pengesahan dan rekomendasi pemakaian dari Direktur Jenderal Perkeretaapian Kementerian Perhubungan No. KA.405/SK.10/DJKA/II/10</p>
            <p>Alat Penambat Rel (Rail fastener) produksi Pindad sangat kompetitif, dengan jaminan kualitas pekerjaan yang tinggi dimana dalam proses produksi kami menggunakan Standar Iinternational maupun National seperti AREMA/AREA Standard, SNI Standar, serta didukung oleh sumber daya manusia yang telah berpengalaman dengan kemampuan dan keahlian yang sudah teruji.</p>
            <p>Produk Peralatan Kapal Laut bermula dari kerja sama yang didirikan bersama Hatlapa. Pindad telah mengembangkan berbagai produk peralatan kapal laut sejak tahun 1991 hingga saat ini dengan nama PinMarine. Dengan dukungan Sumber Daya Manusia, sistem produksi dan kualitas kontrol yang baik, PinMarine mampu menghasilkan produk berkualitas dan kompetitif, serta memenuhi persyaratan klasifikasi Nasional & Internasional, seperti BKI, LR, ClassNK, BV, RINA, GL, ABS, dan lain-lain.</p>
            <p>Kualitas hasil produksi yang bermutu tinggi dan kepuasan pelanggan dalam menggunakan produk yang kami hasilkan. merupakan tujuan bisnis Pindad. Dengan semangat dan keyakinan yang tinggi kami selalu siap bekerja keras untuk mengembangkan keahlian dan teknologi yang dimiliki agar dapat menawarkan solusi terbaik bagi pelanggan maupun pengguna produk kami.</p>
            <p>Untuk pemesanan produk, silahkan kunjungi link berikut ini : <a href="https://pindad.com/inquiry-process">https://pindad.com/inquiry-process</a></p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <input type="text" class="search" name="search" placeholder="Quick Search">
            <ul class="fa-ul list-aside my-3 kategoris">
                <li class="py-1 active" id="kategori-all">All</a></li>
                <li class="py-1" id="kategori-forging">Forging</a></li>
                <li class="py-1" id="kategori-casting">Casting</a></li>
                <li class="py-1" id="kategori-railway">Railway Equipment</a></li>
                <li class="py-1" id="kategori=ship">Ship Equipment</a></li>
            </ul>
        </div>
        <div class="col-md-9 row mb-5" id="produks">
            <?php
                $select = mysqli_query($connection, "select * from produk where jenis_produk='Infrastruktur Perhubungan'");
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