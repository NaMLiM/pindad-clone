<link rel="stylesheet" href="css/template-1.css">
<div class="full text-center">
    <span class="garis"></span>
    <h1 class="display-5 text-light"><dt><b>BERITA</b></dt></h1>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <a href="#" id="back-btn" class="btn btn-warning text-light mb-5" onclick="goBack()"><i class="fa fa-chevron-left" aria-hidden="true"></i> BACK</a>

            <?php
            
            $select = mysqli_query($connection, "select * from berita where id_berita=".$_GET["id"]);
            $data = mysqli_fetch_array($select);
            $judul = $data[1];
            $isi = $data[3];
            ?>

            <h1 class="judul-berita"><b><dt><?php echo $judul ?></dt></b></h1>

            <div id="gambar-berita" class="carousel slide my-4" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <?php
                        $gambars = explode("-", $data[4]);
                        for($i=1;$i<count($gambars);$i++){
                            ?>
                            <div class="carousel-item <?php if($i==1){echo 'active';} ?>">
                                <img src="<?php echo "news/".$gambars[0]."/gambar/".$gambars[$i] ?>" class="img-fluid">
                            </div>
                            <?php
                        }
                    ?>
                </div>
                <a class="carousel-control-prev" href="#gambar-berita" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#gambar-berita" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            
            <?php include(str_replace("../../", "", $isi)) ?>

            <div class="share mb-5">
                <b class="mr-4">SHARE</b>
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-linkedin-in"></i></a>
                <a href=""><i class="fab fa-google-plus-g"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
            </div>
            
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

                <?php

                $popular_post = mysqli_query($connection, "select * from berita order by tanggal desc");
                $i = 0;
                while($data = mysqli_fetch_array($popular_post)){
                    if($i == 4){
                        break;
                    }
                    if($data[4]==null || $data[4]==""){
                        $thumbnail = "#";
                    }else{
                        $thumbnail = "news/".explode("-", $data[4])[0]."/gambar/".explode("-", $data[4])[1];
                    }
                    ?>

                    <div class="row popular-post my-4">
                        <div class="col-md-3">
                            <a href="index.php?page=view-news&id=<?php echo $data[0] ?>"><img src="<?php echo $thumbnail ?>" alt=""></a>
                        </div>
                        <div class="col-md-9">
                            <div class="text-warning font-weight-bold tanggal"><?php echo date("d M, Y", strtotime($data[2])) ?></div>
                            <a href="index.php?page=view-news&id=<?php echo $data[0] ?>" class="font-weight-bold judul"><?php echo $data[1] ?></a>
                        </div>
                    </div>

                    <?php
                    $i++;
                }

                ?>
                
            </div>
        </div>
    </div>
</div>

<script>
    function goBack() {
        window.history.back();
    }
</script>