<link rel="stylesheet" href="css/template-1.css">
<div class="full text-center">
    <span class="garis"></span>
    <h1 class="display-5 text-light"><dt><b>INFORMASI SERTA MERTA</b></dt></h1>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">

            <?php
                $select = mysqli_query($connection, "select * from berita where kategori='informasi-serta-merta'");
                while($data = mysqli_fetch_array($select)){
                    if($data[4]==null || $data[4]==""){
                        $thumbnail = "#";
                    }else{
                        $thumbnail = "news/".explode("-", $data[4])[0]."/gambar/".explode("-", $data[4])[1];
                    }
                    ?>

                    <div class="row article-berita mb-5 pb-5">
                        <div class="col-md-2 text-center">
                            <div class="tanggal-group float-right">
                                <div class="hari"><?php echo date("d", strtotime($data[2])) ?></div>
                                <div class="tanggal"><?php echo date("M", strtotime($data[2])) ?></div>
                                <div class="tanggal"><?php echo date("Y", strtotime($data[2])) ?></div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h5 class="font-weight-bolder mb-4">
                                <a href="index.php?page=view-news&id=<?php echo $data[0] ?>"><?php echo $data[1] ?></a>
                            </h5>
                            <div class="deskripsi">
                                <div class="hide">
                                    <?php include(str_replace("../../", "", $data[3])) ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a href="index.php?page=view-news&id=<?php echo $data[0] ?>"><img src="<?php echo $thumbnail ?>" class="img-fluid" alt=""></a>
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
    var elemt = document.getElementsByClassName("hide");
    for(var i=0; i < elemt.length; i++){
        elemt[i].innerHTML = elemt[i].getElementsByTagName("p")[0].innerHTML;
    }
</script>