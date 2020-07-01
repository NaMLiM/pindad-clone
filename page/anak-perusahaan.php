<link rel="stylesheet" href="css/template-2.css">

<div class="header-blog text-center" style="background-image: url(img/banner/oePE9lU-plain-desktop-backgrounds.png);">
    <span class="garis"></span>
    <h1 class="display-5 text-light"><dt><b>>PRODUK ANAK PERUSAHAAN</b></dt></h1>
</div>

<!---->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item font-weight-bold"><a href="index.php">Pindad</a></li>
        <li class="breadcrumb-item font-weight-bold"><a href="">Perusahaan</a></li>
        <li class="breadcrumb-item font-weight-bold"><a href="">Managemen</a></li>
        <li class="breadcrumb-item active" aria-current="page">Produk Anak Perusahaan</li>
    </ol>
</nav>
<div class="container my-5">
    <div class="row">
        <div class="col-md-3">
            <div class="pb-5">
                <h5 class="font-weight-bold text-dark">Tentang Perusahaan</h5>
                <ul class="fa-ul list-aside my-3">
                    <li class="py-1"><a href="index.php?page=weapon">Senjata</a></li>
                    <li class="py-1"><a href="index.php?page=ammunition">Munisi</a></li>
                    <li class="py-1"><a href="index.php?page=special-vehicles">Kendaraan Khusus</a></li>
                    <li class="py-1"><a href="index.php?page=alat-berat">Alat Berat</a></li>
                    <li class="py-1"><a href="index.php?page=peralatan-industri-dan-jasa">Peralatan Industri dan Jasa</a></li>
                    <li class="py-1"><a href="index.php?page=infrastruktur-perhubungan">Infrastruktur Perhubungan</a></li>
                    <li class="py-1"><a href="index.php?page=layanan-pertambangan">Layanan Pertambangan</a></li>
                    <li class="py-1"><a href="index.php?page=cyber-security">Cyber Security</a></li>
                    <li class="py-1"><a href="index.php?page=anak-perusahaan" class="active">Produk Anak Perusahaan</a></li>
                    <li class="py-1"><a href="index.php?page=inquiry-process">Prosedur Pemesanan Produk Industrial</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9 text-dark isi">
            <img src="img/subsidiaries/PEI-pindad.png" class="img-fluid w-50 my-5" alt="">
            <div class="isi-judul">PT Pindad Enjiniring Indonesia (PT PEI)</div>
                <p>Perusahaan yang bergerak dalam bisnis produk industri. Beberapa bidang pekerjaan yang dijalani diantaranya manufaktur, perniagaan/perdagangan, percetakan, jasa pariwisata, perhotelan, jasa penyewaan excavator serta kelengkapan militer non-lethal.</p>
                <p>Produk unggulan PT PEI antara lain: Alkapsus, Motor Cross KLX 250cc, Pertashop, Amphibious Boat, Videotron, Roda Loko.</p>
                <p>PT. PEI berkomitmen untuk melahirkan produk berkualitas, salah satunya melalui kerjasama dengan PT. Pertamina Retail membuat inovasi baru Pom Bensin Mini yang mengutamakan keamanan dengan nama Pertashop. Kehadiran Pertashop ini diharapkan menjadi solusi dan mampu menjangkau seluruh daerah di Indonesia. Ulasan selengkapnya dapat disimak melalui video berikut ini. </p>

            <br>

            <img src="img/subsidiaries/PGST-Pindad.png" class="img-fluid w-50 my-5" alt="">
            <div class="isi-judul">PT Pindad Global Sources & Trading (PT PGST)</div>

                <p>Memiliki kemampuan dan pengetahuan sebagai pemasok umum dan kontraktor untuk memberikan layanan perdagangan yang memuaskan sesuai dengan tantangan dan persyaratan pelanggan. PGST memiliki agen untuk Produk Pertahanan, Keamanan, Industri, Listrik, Telekomunikasi dan Kereta Api.</p>
                <p>Produk unggulan PT PGST  antara lain: PG TZ1, PG BT1, PG Alpha-1, Platform Intrusion Emergency Stop System</p>

            <img src="img/subsidiaries/LOGO_PMU_31.jpg" class="img-fluid w-50 my-5" alt="">
            <div class="isi-judul">PT Pindad Medika Utama</div>
            <p>Bidang Usaha </p>

            <p>Bidang jasa, terutama jasa pergudangan, transportasi, kepabeanan baik ekspor maupun impor serta jasa pengurusan freight dan movers.</p>

            <p>Alamat
            Jl. Jenderal Gatot Subroto No 517 Kel. Sukapura Kec. Kiaracondong Bandung - 40284</p>

        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <input type="text" class="search" name="search" placeholder="Quick Search" id="search">
            <ul class="fa-ul list-aside my-3 kategoris">
                <li class="py-1 active" id="kategori-all">All</li>
                <li class="py-1" id="kategori-pt-pei">PT.PEI</li>
                <li class="py-1" id="kategori-pt-pgst">PT. PGST</li>
                <li class="py-1" id="kategori-pt-pmu">PT. PMU</li>
            </ul>
        </div>
        <div class="col-md-9 row mb-5" id="produks">
            <?php
                $select = mysqli_query($connection, "select * from produk where jenis_produk='Produk Anak Perusahaan'");
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