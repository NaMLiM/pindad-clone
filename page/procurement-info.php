<link rel="stylesheet" href="css/template-1.css">
<div class="full text-center">
    <span class="garis"></span>
    <h1 class="display-5 text-light"><dt><b>INFORMASI PENGADAAN</b></dt></h1>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-8" id="beritas">
            <script>
                var select_berita = "select * from berita where kategori='procurement-info' ORDER BY tanggal DESC";
                function ajax(x){
                    $("#beritas").load("page/ajax-berita.php", {query:select_berita, hal:x}, function (response, status, request) {
                        this; // dom element
                    });
                }
            </script>
        </div>

        <div class="col-md-4">
            <div class="pb-5">
                <h5><dt><b>RUANG PUBLIK</b></dt></h5>
                <ul class="fa-ul list-aside my-3">
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="https://eproc.pindad.com">E-PROCUREMENT</a></li>
                    <li><span class="fa-li"><i class="fas fa-angle-right"></i></span><a href="index.php?page=procurement-info">INFORMASI PENGADAAN</a></li>
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