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
            <input type="text" class="search" name="search" placeholder="Quick Search" id="search">
            <ul class="fa-ul list-aside my-3 kategoris">
                <li class="py-1 active" id="kategori-all">All</li>
                <li class="py-1" id="kategori-rifles">Rifles</li>
                <li class="py-1" id="kategori-sniper-rifles">Sniper Rifles</li>
                <li class="py-1" id="kategori-machine-guns">Machine Guns</li>
                <li class="py-1" id="kategori-grenade-launcher">Grenade Launcher</li>
                <li class="py-1" id="kategori-mortir">Mortir</li>
                <li class="py-1" id="kategori-pistols">Pistols</li>
                <li class="py-1" id="kategori-shotguns">Shotguns</li>
                <li class="py-1" id="kategori-submachine-guns">Submachine Guns</li>
            </ul>
        </div>
        <div class="col-md-9 row mb-5" id="produks">
            <?php
                $select = mysqli_query($connection, "select * from produk where jenis_produk='Senjata'");
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