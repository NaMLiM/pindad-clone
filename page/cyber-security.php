<link rel="stylesheet" href="css/template-2.css">

<div class="header-blog text-center" style="background-image: url(img/banner/head-cyber.png);">
    <span class="garis"></span>
    <h1 class="display-5 text-light"><dt><b>CYBER SECURITY</b></dt></h1>
</div>
<!---->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item font-weight-bold"><a href="index.php">Pindad</a></li>
        <li class="breadcrumb-item font-weight-bold"><a href="">Produk & Jasa</a></li>
        <li class="breadcrumb-item active" aria-current="page">Cyber Security</li>
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
                    <li class="py-1"><a href="index.php?page=layanan-pertambangan">Layanan Pertambangan</a></li>
                    <li class="py-1"><a href="index.php?page=cyber-security" class="active">Cyber Security</a></li>
                    <li class="py-1"><a href="index.php?page=anak-perusahaan">Anak Perusahaan</a></li>
                    <li class="py-1"><a href="index.php?page=inquiry-process">Prosedur Pemesanan Produk Industrial</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9 text-dark isi">
            <p>Dalam UU No 3 Tahun 2002 tentang Pertahanan Negara, telah ditetapkan bahwa ancaman dalam sistem pertahanan negara terdiri dari ancaman militer dan ancaman non militer, termasuk diantaranya ancaman siber.</p>
            <p>Saat ini ancaman peperangan menjadi sangat kompleks dan berkembang pesat, Hybrid warfare menjadi ancaman dimana selain Regular Military Forces dan Special Forces melibatkan juga Iregular Forces yaitu perang informasi dan propaganda, perang diplomasi, serangan cyber dan perang untuk penguasaan dominasi ekonomi.
            Ancaman serangan cyber menjadi sangat serius, berdasarkan data Indonesia Security Incident Response Team on Internet Infrastructure (IDSIRTII) terdapat 48,8 juta serangan Internet sepanjang tahun 2015 di Indonesia. Tingginya angka kejahatan dan peretas di bidang Internet ini menjadi ancaman di tengah masifnya pertumbuhan pengguna internet di Indonesia. Serangan cyber mengancam di berbagai sektor antara lain Pelayanan Publik, Ekonomi, Pertahanan, Keamanan, dan Energi. Pertahanan cyber tidak mengenal batas teritorial negara serangan bisa datang dari dalam maupun dari luar.
            Sebagai industri pertahanan strategis PT. PINDAD (PERSERO) menyadari untuk tetap konsisten menjalankan core sebagai industri pertahanan dengan Inovasi produk dan layanan Cyber Security dengan tiga mata rantai 
            Solusi Peningkatan Kompetensi Sumber daya manusia (PEOPLE)
            Solusi Penataan Proses Tata Kelola Kemanan Informasi (PROCESS)
            Solusi Teknologi sebagai Solution Integrator dan Pengembangan Produk  (TECHNOLOGY)</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <input type="text" class="search" name="search" placeholder="Quick Search" id="search">
        </div>
        <div class="col-md-9 row mb-5" id="produks">
            <?php
                $select = mysqli_query($connection, "select * from produk where jenis_produk='Cyber Security'");
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