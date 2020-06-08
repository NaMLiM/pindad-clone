<link rel="stylesheet" href="css/template-2.css">

<div class="header-blog text-center" style="background-image: url(img/banner/DSC_1610.jpg);">
    <span class="garis"></span>
    <h1 class="display-5 text-light"><dt><b>PERALATAN INDUSTRI DAN JASA</b></dt></h1>
</div>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item font-weight-bold"><a href="index.php">Pindad</a></li>
        <li class="breadcrumb-item font-weight-bold"><a href="">Produk & Jasa</a></li>
        <li class="breadcrumb-item active" aria-current="page">Peralatan Industri dan Jasa</li>
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
                    <li class="py-1"><a href="index.php?page=peralatan-industri-dan-jasa" class="active">Peralatan Industri dan Jasa</a></li>
                    <li class="py-1"><a href="index.php?page=infrastruktur-perhubungan">Infrastruktur Perhubungan</a></li>
                    <li class="py-1"><a href="index.php?page=layanan-pertambangan">Layanan Pertambangan</a></li>
                    <li class="py-1"><a href="index.php?page=cyber-security">Cyber Security</a></li>
                    <li class="py-1"><a href="index.php?page=anak-perusahaan">Anak Perusahaan</a></li>
                    <li class="py-1"><a href="index.php?page=inquiry-process">Prosedur Pemesanan Produk Industrial</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9 text-dark isi">
            <p>Divisi Peralatan Industri dan Jasa PT Pindad (Persero) adalah divisi yang menghasilkan produk-produk pendukung industri kelistrikan dan energi, industri pertanian, industri minyak dan gas, serta peralatan industri lainnya. Selain memenuhi kebutuhan industri dengan mengeluarkan produk, dengan fasilitas produksi dan mesin industri yang mumpuni, divisi Peralatan Industri dan Jasa juga menyediakan jasa perawatan dan perbaikan produk-produk yang berada dalam lingkup divisi Peralatan Industrial dan Jasa, serta jasa proyek.</p>
            <p>Produk mesin listrik yang dihasilkan Pindad meliputi generator dengan kapasitas sampai 15 MW, motor listrik yang terdiri dari produk motor traksi yang digunakan di kereta api listrik‚ motor magnet permanen, switchgear, serta jasa perbaikan mesin-mesin listrik. Produk mesin listrik Pindad telah digunakan di sebagian besar pembangkit listrik di Indonesia.</p>
            <p>Untuk mendukung sektor pertanian di Indonesia, Pindad bekerja sama dengan Kementerian Pertanian memproduksi alat dan mesin pertanian (alsintan) antara lain traktor roda empat (multiguna), rota tanam, combine multikomoditas, paddy dryer, dan silo penyimpanan hasil panen.</p>
            <p>Untuk pemenuhan sektor minyak dan gas, Pindad telah dipercaya oleh PT Pertamina untuk memproduksi tabung LPG ukuran 3 kg yang sesuai dengan standar JIS dan SNI 1452:2011, yang cakupannya tersebar di seluruh Indonesia. Dengan fasilitas lini produksi yang mumpuni, lini produksi tabung tidak hanya terbatas pada tabung kapasitas 3 kg, tetapi juga mampu mengerjakan hingga kapasitas 50 kg, serta mampu memproduksi tangki airbrake.</p>
            <p>Kualitas hasil produksi yang bermutu tinggi dan kepuasan pelanggan dalam menggunakan produk yang kami hasilkan. merupakan tujuan bisnis Pindad. Dengan semangat dan keyakinan yang tinggi kami selalu siap bekerja keras untuk mengembangkan keahlian dan teknologi yang dimiliki agar dapat menawarkan solusi terbaik bagi pelanggan maupun pengguna produk kami.</p>
            <p>Untuk pemesanan produk, silahkan kunjungi link berikut ini : <a href="https://pindad.com/inquiry-process">https://pindad.com/inquiry-process</a></p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <input type="text" class="search" name="search" placeholder="Quick Search">
            <ul class="fa-ul list-aside my-3">
                <li class="py-1"><a href="#">All</a></li>
                <li class="py-1"><a href="#">Electric Machines</a></li>
                <li class="py-1"><a href="#">Agricultural Machines</a></li>
            </ul>
        </div>
        <div class="col-md-9 row">
            <?php
                $select = mysqli_query($connection, "select * from produk where jenis_produk='Peralatan Industri dan Jasa'");
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