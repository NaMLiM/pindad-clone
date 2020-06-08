<link rel="stylesheet" href="css/template-2.css">

<div class="header-blog text-center" style="background-image: url(img/banner/Header_Munisi.jpg);">
    <span class="garis"></span>
    <h1 class="display-5 text-light"><dt><b>MUNISI</b></dt></h1>
</div>
<!---->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item font-weight-bold"><a href="index.php">Pindad</a></li>
        <li class="breadcrumb-item font-weight-bold"><a href="">Produk & Jasa</a></li>
        <li class="breadcrumb-item active" aria-current="page">Munisi</li>
    </ol>
</nav>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <div class="pb-5">
                <h5 class="font-weight-bold text-dark">Produk & Jasa</h5>
                <ul class="fa-ul list-aside my-3">
                    <li class="py-1"><a href="index.php?page=weapon">Senjata</a></li>
                    <li class="py-1"><a href="index.php?page=ammunition" class="active">Munisi</a></li>
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
            <p>PT Pindad (Persero), sebagai perusahaan penyedia peralatan pertahanan dan keamanan, memproduksi berbagai varian amunisi kaliber kecil, kaliber besar, dan kaliber sedang mulai dari kaliber 5.56 mm hingga munisi artileri 105 mm serta berbagai varian granat. Pindad terus melakukan ekspansi produksi amunisi dan mengembangkannya sesuai dengan perkembangan teknologi senjata-senjata yang semakin beragam. </p>
            <p>Keunggulan dari amunisi Pindad adalah memiliki banyaknya varian yang dapat disesuaikan dengan jenis senjata dan hasil tembakan yang diinginkan.</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <input type="text" class="search" name="search" placeholder="Quick Search">
            <ul class="fa-ul list-aside my-3">
                <li class="py-1"><a href="#">All</a></li>
                <li class="py-1"><a href="#">Small Caliber</a></li>
                <li class="py-1"><a href="#">Big Caliber</a></li>
                <li class="py-1"><a href="#">Special Ammunition</a></li>
            </ul>
        </div>
        <div class="col-md-9 row">
            <?php
                $select = mysqli_query($connection, "select * from produk where jenis_produk='Munisi'");
                while($data = mysqli_fetch_array($select)){
                    echo "<div class='col-md-3 mb-4'>";
                    echo "<div class='card'>";
                    echo "<img class='card-img-top' src='admin/upload/".explode("-", $data["gambar"])[0]."/gambar/".explode("-", $data["gambar"])[1]."'>";
                    echo "<div class='card-body font-weight-bold'>";
                    echo "<p>".$data["nama_produk"]."</p>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            ?>
        </div>
    </div>
</div>