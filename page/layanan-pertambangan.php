<link rel="stylesheet" href="css/template-2.css">

<div class="header-blog text-center" style="background-image: url(img/banner/head-handakom.jpg);">
    <span class="garis"></span>
    <h1 class="display-5 text-light"><dt><b>LAYANAN PERTAMBANGAN</b></dt></h1>
</div>
<!---->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item font-weight-bold"><a href="index.php">Pindad</a></li>
        <li class="breadcrumb-item font-weight-bold"><a href="">Produk & Jasa</a></li>
        <li class="breadcrumb-item active" aria-current="page">Layanan Pertambangan</li>
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
                    <li class="py-1"><a href="index.php?page=infrastruktur-perhubungan">Infrastruktur Perhubungan</a></li>
                    <li class="py-1"><a href="index.php?page=layanan-pertambangan" class="active">Layanan Pertambangan</a></li>
                    <li class="py-1"><a href="index.php?page=cyber-security">Cyber Security</a></li>
                    <li class="py-1"><a href="index.php?page=anak-perusahaan">Anak Perusahaan</a></li>
                    <li class="py-1"><a href="index.php?page=inquiry-process">Prosedur Pemesanan Produk Industrial</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9 text-dark isi">
            <p>Salah satu lini dari PT Pindad (Persero) adalah Bahan Peledak Komersial atau lebih dikenal dengan Handakkom. Keahlian dan pengalaman SDM PT Pindad (Persero) di bidang persenjataan dan bahan peledak membuat PT Pindad (Persero) untuk mengembangkan produk dan layanannya. Oleh karena itu, sejak tahun 1991 PT. Pindad telah memulai memproduksi bahan peledak komerisial seperti :</p>
            <p>Booster (RenEx T),Booster (RenEx P), Seismic Explosive (geoPENTOSEIS), Seismic Detonator (geoDETOSEIS), Detonator Listrik  (SUPERdet). Dengan kemampuan PT. Pindad  memproduksi bahan peledak komersial, maka PT. Pindad siap memberikan pelayanan berupa produk dan jasa produksi pertambangan dengan metoda peledakan sesuai kebutuhan pelanggan.</p>
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
                <li class="py-1" id="kategori-explosive">Explosive</a></li>
                <li class="py-1" id="kategori-service">Explosive Services</a></li>
            </ul>
        </div>
        <div class="col-md-9 row mb-5" id="produks">
            <?php
                $select = mysqli_query($connection, "select * from produk where jenis_produk='Layanan Pertambangan'");
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