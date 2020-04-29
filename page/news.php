<link rel="stylesheet" href="css/template-1.css">
<div class="full text-center">
    <span class="garis"></span>
    <h1 class="display-5 text-light"><dt><b>BERITA</b></dt></h1>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">

            <?php
                $select = mysqli_query($connection, "select * from berita");
                while($data = mysqli_fetch_array($select)){
                    ?>

                    <div class="row article-berita mb-5 pb-5">
                        <div class="col-md-2 text-center">
                            <div class="tanggal-group float-right">
                                <div class="hari"><?php echo $data[] ?></div>
                                <div class="tanggal">apr</div>
                                <div class="tanggal">2017</div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h5 class="font-weight-bolder mb-4">
                                <a href="">Ketua DPD RI Kunjungi Pindad Tinjau Ventilator Dan produk Lainnya Untuk Memerangi Covid-19</a>
                            </h5>
                            <div class="deskripsi">
                                PT Pindad (Persero) memperkenalkan ventilator dan produk-produk lainnya untuk memerangi Covid-19 pada kunjungan kerja Ketua Dewan Perwakilan Daerah RI (DPD), AA La Nyalla Mahmud Mattalitti (20/4). Direktur Utama, Abraham Mose beserta jajaran Direksi menerima kunjungan Ketua DPD dalam rangka menduk...
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a href=""><img src="img/berita/1._Penandatanganan_Kontrak_Tank_Boat_2_.jpg" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <?php
                }
            ?>

            
        </div>

        <div class="col-md-4">
            <div class="pb-5">
                <h5><dt><b>RUANG PUBLIK</b></dt></h5>
                <ul class="fa-ul list-aside my-3">
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=news">BERITA</a></li>
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=press-release">SIARAN PERS</a></li>
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=pindad-in-news">PINDAD DALAM BERITA</a></li>
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=majalah">MAJALAH</a></li>
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=catalog-and-brochures">KATALOG DAN BROSUR</a></li>
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=gallery">GALLERY</a></li>
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=video">VIDEO</a></li>
                </ul>
            </div>

            <div class="pb-5">
                <h5><dt><b>POPULAR POST</b></dt></h5>
                <div class="row popular-post my-4">
                    <div class="col-md-3">
                        <a href=""><img src="img/berita/1._Penandatanganan_Kontrak_Tank_Boat_2_.jpg" class="img-fluid img-berita" alt=""></a>
                    </div>
                    <div class="col-md-9">
                        <div class="text-warning font-weight-bold tanggal">Tanggal</div>
                        <a href="" class="font-weight-bold judul">Pindad Resmikan Lini Baru Fasilitas Produksi Sistem Senjata</a>
                    </div>
                </div>
                <div class="row popular-post my-4">
                    <div class="col-md-3">
                        <a href=""><img src="img/berita/1._Penandatanganan_Kontrak_Tank_Boat_2_.jpg" class="img-fluid img-berita" alt=""></a>
                    </div>
                    <div class="col-md-9">
                        <div class="text-warning font-weight-bold tanggal">Tanggal</div>
                        <a href="" class="font-weight-bold judul">Pindad Resmikan Lini Baru Fasilitas Produksi Sistem Senjata</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>