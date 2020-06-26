<link rel="stylesheet" href="css/template-2.css">

<div class="header-blog text-center" style="background-image: url(img/banner/Header_Senjata.jpg);">
    <span class="garis"></span>
    <h1 class="display-5 text-light"><dt><b>SENJATA</b></dt></h1>
</div>
<!---->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item font-weight-bold"><a href="index.php">Pindad</a></li>
        <li class="breadcrumb-item font-weight-bold"><a href="">Produk & Jasa</a></li>
        <li class="breadcrumb-item active" aria-current="page">Senjata</li>
    </ol>
</nav>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <div class="pb-5">
                <h5 class="font-weight-bold text-dark">Produk & Jasa</h5>
                <ul class="fa-ul list-aside my-3">
                    <li class="py-1"><a href="index.php?page=weapon" class="active">Senjata</a></li>
                    <li class="py-1"><a href="index.php?page=ammunition">Munisi</a></li>
                    <li class="py-1"><a href="index.php?page=special-vehicles">Kendaraan Khusus</a></li>
                    <li class="py-1"><a href="index.php?page=alat-berat">Alat Berat</a></li>
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
            <p>PT Pindad (Persero) sejak berdiri tahun 1983  telah memproduksi berbagai jenis senjata mulai dari senjata laras panjang, senjata genggam, pistol, dan lainnya. Setiap produksi diutamakan untuk menyuplai kebutuhan peralatan pertahanan dan keamanan nasional serta untuk memenuhi pemesanan dari pihak lain.</p>
            <p>Produksi senjata terus ditingkatkan kualitasnya berdasarkan penelitian dan pengembangan dari tenaga-tenaga ahli Pindad bersama dengan pengguna produk untuk menetapkan spesifikasi yang dibutuhkan. Dalam setiap produksi, proses optimasi kami lakukan untuk memperoleh unjuk kerja dari senjata yang maksimal. Pemeriksaan dilakukan pada setiap proses manufaktur mulai dari penerimaan material sampai proses akhir pembuatan produk. Seluruh produk telah diuji dan memenuhi standar internasional salah satunya Mil STD. Sistem mutu selalu dipelihara dengan menerapkan sistem mutu ISO 9000-2008 yang disertifikasi oleh LRQA.</p>
            <p>Senjata Pindad memiliki akurasi  yang baik dan ketahanan di medan peperangan sesuai dengan kebutuhan pertahanan dan keamanan. Beberapa senjata telah berhasil meraih prestasi lomba tembak antar angkatan darat se-Asia Tenggara (AARM) dan lomba tembak Angkatan Darat se-Asia Pasifik (ASAM), serta Lomba Tembak tahunan yang diselenggarakan oleh Angkatan Bersenjata Diraja Brunei (BISAM).</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <input type="text" class="search" name="search" placeholder="Quick Search">
            <ul class="fa-ul list-aside my-3">
                <li class="py-1"><a href="#">All</a></li>
                <li class="py-1"><a href="#">Rifles</a></li>
                <li class="py-1"><a href="#">Sniper Rifles</a></li>
                <li class="py-1"><a href="#">Machine Guns</a></li>
                <li class="py-1"><a href="#">Grenade Launcher</a></li>
                <li class="py-1"><a href="#">Mortir</a></li>
                <li class="py-1"><a href="#">Pistols</a></li>
                <li class="py-1"><a href="#">Shotguns</a></li>
                <li class="py-1"><a href="#">Submachine Guns</a></li>
            </ul>
        </div>
        <div class="col-md-9 row">
            <?php
                $select = mysqli_query($connection, "select * from produk where jenis_produk='Senjata'");
                while($data = mysqli_fetch_array($select)){
                    ?>
                    <div class="col-md-3 mb-2 px-2">
                        <div class="card">
                            <div class="card-overlay">
                                <a href="" class="eye rounded-circle bg-orange text-white"><i class="fas fa-eye"></i></a>
                                <a href="" class="link rounded-circle bg-orange text-white"><i class="fas fa-link"></i></a>
                            </div>
                            <img class="card-img-top" src="admin/upload/<?php echo explode("-", $data["gambar"])[0]; ?>/gambar/<?php echo explode("-", $data["gambar"])[1]; ?>">
                            <div class="card-body font-weight-bold" style="letter-spacing : -1px">
                                <p><?php echo $data["nama_produk"]; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            ?>
        </div>
    </div>
</div>