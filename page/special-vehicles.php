<link rel="stylesheet" href="css/template-2.css">

<div class="header-blog text-center" style="background-image: url(img/banner/Header_Anoa.jpg);">
    <span class="garis"></span>
    <h1 class="display-5 text-light"><dt><b>KENDARAAN KHUSUS</b></dt></h1>
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
                    <li class="py-1"><a href="index.php?page=weapon">Senjata</a></li>
                    <li class="py-1"><a href="index.php?page=ammunition">Munisi</a></li>
                    <li class="py-1"><a href="index.php?page=special-vehicles" class="active">Kendaraan Khusus</a></li>
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
            <p>PT Pindad (Persero) mulai masuk pada pengembangan teknologi kendaraan bermotor pada tahun 1993 melalui program Mobil Nasional. Pindad telah bekerja sama dengan berbagai pihak baik dalam maupun luar negeri dalam upaya untuk mengembangkan teknologi fungsi kendaraan khususnya kendaraan tempur untuk memenuhi kebutuhan pertahanan dan keamanan nasional.</p>
            <p>Produk-produk kendaraan tempur yang dihasilkan, diantaranya : Kendaraan Taktis 4x4 “KOMODO” dan Panser 6x6 “ANOA” yang telah diproduksi lebih dari 300 unit dengan berbagai varian serta ikut dalam misi perdamaian dunia PBB di berbagai Negara seperti Lebanon, Afrika Tengah, dan Sudan.</p>
            <p>Penelitian dan pengembangan terus menerus dilakukan untuk mencapai tujuan masa depan untuk meningkatkan kapasitas bisnis dan teknologi. Produk penelitian dan pengembangan terbaru yang dilakukan oleh Pindad adalah produk Medium Tank “HARIMAU” yang bekerjasama dengan FNSS (Turki) serta didukung oleh Kementerian Pertahanan RI. Sistem ini dilengkapi senjata Turret 105 mm serta mampu melewati berbagai medan pertempuran.</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <input type="text" id="search" class="search" name="search" placeholder="Quick Search">
            <ul class="fa-ul list-aside my-3 kategoris">
                <li class="py-1 active" id="kategori-all">All</li>
                <li class="py-1" id="kategori-komodo">4 x 4 Komodo</a></li>
                <li class="py-1" id="kategori-anoa">6 x 6 Anoa</a></li>
            </ul>
        </div>
        <div class="col-md-9 row mb-5 produks">
            <?php
                $select = mysqli_query($connection, "select * from produk where jenis_produk='Kendaraan Khusus'");
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