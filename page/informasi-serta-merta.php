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
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=regulasi-keterbukaan-informasi-publik">REGULASI KETERBUKAAN INFORMASI PUBLIK</a></li>
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=informasi-berkala">INFORMASI BERKALA </a></li>
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=informasi-serta-merta">INFORMASI SERTA MERTA</a></li>
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=informasi-setiap-saat">INFORMASI SETIAP SAAT</a></li>
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=prosedur-permohonan-informasi">PROSEDUR PERMOHONAN INFORMASI</a></li>
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=prosedur-pengajuan-keberatan">PROSEDUR PENGAJUAN KEBERATAN</a></li>
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=prosedur-penyelesaian-sengketa-informasi">PROSEDUR PENYELESAIAN SENGKETA INFORMASI</a></li>
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=laporan-layanan-informasi-publik">LAPORAN LAYANAN INFORMASI PUBLIK</a></li>
                </ul>
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