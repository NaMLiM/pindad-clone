<?php
    $id_produk = $_GET['id'];
    $select = mysqli_query($connection, "select * from produk where id_produk=$id_produk");
    while($data = mysqli_fetch_array($select)){
        $nama_produk = $data["nama_produk"];
        $jenis_produk = $data["jenis_produk"];
        $kategori = $data["kategori"];
        $gambar = $data["gambar"];
        $video = $data["video"];
        $spek = $data["spek"];
        $deskripsi = $data["deskripsi"];
    }
?>
<link rel="stylesheet" href="css/template-2.css">

<div class="full text-center">
    <span class="garis"></span>
    <h1 class="display-5 text-light"><dt><b><?php echo $nama_produk; ?></b></dt></h1>
</div>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item font-weight-bold"><a href="index.php">Pindad</a></li>
        <li class="breadcrumb-item font-weight-bold"><a href="">Produk & Jasa</a></li>
        <li class="breadcrumb-item font-weight-bold"><a href="index.php?page=weapon"><?php echo $jenis_produk ?></a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo $nama_produk ?></li>
    </ol>
</nav>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 mb-5">
            <div class="product-img border border-secondary">
                <div id="gambar-senjata" class="carousel slide my-4" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <?php
                            $gambars = explode("-", $gambar);
                            for($i=1;$i<count($gambars);$i++){
                                ?>
                                <div class="carousel-item <?php if($i==1){echo 'active';} ?>">
                                    <img src="<?php echo "admin/upload/".$gambars[0]."/gambar/".$gambars[$i] ?>" class="img-fluid">
                                </div>
                                <?php
                            }
                        ?>
                    </div>
                    <a class="carousel-control-prev" href="#gambar-senjata" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#gambar-senjata" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-dark">
            <div class="mb-5">
                <h3><?php echo $nama_produk ?></h3>
                <?php include(str_replace("../","admin/", $deskripsi)) ?>
            </div>
            <div class="text-dark mt-5">
                <h3>Certification</h3>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs tab-spec border-0">
                <li><a class="active px-2" data-toggle="tab" href="#specification">SPECIFICATION</a></li>
                <li><a class="px-2" data-toggle="tab" href="#video">VIDEO</a></li>
            </ul>
        </div>
    </div>
    <div class="row mt-4 spec mb-5">
        <div class="tab-content">
            <div id="specification" class="tab-pane active">
                <?php include(str_replace("../","admin/", $spek));?>
            </div>
            <div id="video" class="tab-pane fade">
                <h3>VIDEO DI SINI</h3>
            </div>
        </div>
    </div>
    <div class="row mt-4 mb-5 d-block">
        <h3 class="d-block">Related Product</h3>
        <div class="related-produk" id="related-produk">
            <?php 
                $select = mysqli_query($connection, "select * from produk where kategori='$kategori' and jenis_produk='$jenis_produk'");
                while($data=mysqli_fetch_array($select)){
                    ?>
                    
                    <div class="related-produk-card">
                        <img class="img-fluid" src="admin/upload/<?php echo explode("-", $data["gambar"])[0]; ?>/gambar/<?php echo explode("-", $data["gambar"])[1]; ?>">
                        <h3><a href="index.php?page=view-product&&id=<?php echo $data["id_produk"] ?>"><?php echo $data["nama_produk"] ?></a></h3>
                        <div class="teks-container">
                            <div class="teks">
                                <div>
                                    <?php include(str_replace("..", "admin", $data["deskripsi"])) ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                }
            ?>
        </div>
    </div>
</div>