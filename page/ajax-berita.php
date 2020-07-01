<?php
    include("../admin/system/connection.php");

    $query = $_POST["query"];
    $select = mysqli_query($connection, $query);

    $row = 0;
    $halaman = $_POST["hal"];
    while($data = mysqli_fetch_array($select)){
        if($data[4]==null || $data[4]==""){
            $thumbnail = "#";
        }else{
            $thumbnail = "news/".explode("-", $data[4])[0]."/gambar/".explode("-", $data[4])[1];
        }

        if($row<$halaman && $row>=$halaman-8){
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
                            <?php include(str_replace("../../", "../", $data[3])) ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <a href="index.php?page=view-news&id=<?php echo $data[0] ?>"><img src="<?php echo $thumbnail ?>" class="img-fluid" alt=""></a>
                </div>
            </div>
            

            <?php
        }
        $row += 1;
    }
?>

<div class="page-number mb-5">
    <button class="last-page" id="last-page" <?php if($halaman!=8){ echo 'onclick="last_page()"'; } ?> ><i class="fas fa-angle-left"></i></button>
    <?php
        for($i=0; $i<$row/8; $i++){
            if($i+1==$halaman/8){
                ?>
                <button class="number active" onclick="toPage(<?php echo ($i+1)*8 ?>)"><?php echo $i+1; ?></button>
                <?php
            }else{
                ?>
                <button class="number" onclick="toPage(<?php echo ($i+1)*8 ?>)"><?php echo $i+1; ?></button>
                <?php
            }
            $halaman_terakhir = $i+1;
            
        }
    ?>
    <button class="next-page" id="next-page" <?php if($halaman_terakhir*8!=$halaman){echo 'onclick="next_page()"';} ?> >NEXT PAGE<i class="fas fa-angle-right"></i></button>
</div>