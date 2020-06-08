<?php

    include("../system/connection.php");

    $id = $_POST["id"];

    $select = mysqli_query($connection, "select * from produk where id_produk=$id");

    while($data = mysqli_fetch_array($select)){
        $nama_produk = $data["nama_produk"];
        $jenis_produk = $data["jenis_produk"];
        $kategori = $data["kategori"];
        $gambar = $data["gambar"];
        $video = $data["video"];
        $spek = $data["spek"];
    }

    ?>

    <div class="form-inline">
        <label>ID</label>
        <input type="text" name="id_produk" class="form-control ml-auto" value="<?php echo $id ?>" readonly required>
    </div>
    <div class="form-inline">
        <label>Nama Produk</label>
        <input type="text" name="nama_produk" placeholder="Nama Produk" class="form-control ml-auto" value="<?php echo $nama_produk ?>" required>
    </div>
    <div class="form-inline">
        <label>Jenis Produk</label>
        <input type="text" name="jenis_produk" class="form-control ml-auto" value="<?php echo $jenis_produk ?>" readonly required>
    </div>
    <?php

    switch ($jenis_produk) {
        case 'Senjata':
            ?>
            <div class="form-inline">
                <label>Kategori</label>
                <select class="form-control ml-auto" name="kategori" required>
                    <option <?php if($kategori=="Rifles"){echo "selected";} ?> >Rifles</option>
                    <option <?php if($kategori=="Sniper Rifles"){echo "selected";} ?> >Sniper Rifles</option>
                    <option <?php if($kategori=="Machine Guns"){echo "selected";} ?> >Machine Guns</option>
                    <option <?php if($kategori=="Grenade Launcher"){echo "selected";} ?> >Grenade Launcher</option>
                    <option <?php if($kategori=="Mortir"){echo "selected";} ?> >Mortir</option>
                    <option <?php if($kategori=="Pistols"){echo "selected";} ?> >Pistols</option>
                    <option <?php if($kategori=="Shotguns"){echo "selected";} ?> >Shotguns</option>
                    <option <?php if($kategori=="Submachine Guns"){echo "selected";} ?> >Submachine Guns</option>
                </select>
            </div>
            <?php
            $gambar_array =  explode("-", $gambar);
            ?>
            <div id="gambar-slide" class="carousel slide w-50 mx-auto border-gray" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <?php
                    for($i=1; $i <= count($gambar_array)-1; $i++){
                        ?>
                        <div class="carousel-item <?php if($i==1){echo 'active';} ?>">
                            <img src="upload/<?php echo $gambar_array[0] ?>/gambar/<?php echo $gambar_array[$i] ?>" class="img-fluid">
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <a class="carousel-control-prev" href="#gambar-slide" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#gambar-slide" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <?php

            break;

        case 'Munisi':
            ?>
            <div class="form-inline">
                <label>Kategori</label>
                <select class="form-control ml-auto" name="kategori" required>
                    <option <?php if($kategori=="Small Caliber"){echo "selected";} ?> >Small Caliber</option>
                    <option <?php if($kategori=="Big Caliber"){echo "selected";} ?> >Big Caliber</option>
                    <option <?php if($kategori=="Special Ammunition"){echo "selected";} ?> >Special Ammunition</option>
                </select>
            </div>
            <?php
            $gambar_array =  explode("-", $gambar);
            ?>
            <div id="gambar-slide" class="carousel slide w-50 mx-auto border-gray" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <?php
                    for($i=1; $i <= count($gambar_array)-1; $i++){
                        ?>
                        <div class="carousel-item <?php if($i==1){echo 'active';} ?>">
                            <img src="upload/<?php echo $gambar_array[0] ?>/gambar/<?php echo $gambar_array[$i] ?>" class="img-fluid">
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <a class="carousel-control-prev" href="#gambar-slide" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#gambar-slide" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <?php
            break;

        case 'Kendaraan Khusus':
            ?>
            <div class="form-inline">
                <label>Kategori</label>
                <select class="form-control ml-auto" name="kategori" required>
                    <option <?php if($kategori=="4 x 4 Komodo"){echo "selected";} ?> >4 x 4 Komodo</option>
                    <option <?php if($kategori=="6 x 6 Anoa"){echo "selected";} ?> >6 x 6 Anoa</option>
                </select>
            </div>
            <?php
            $gambar_array =  explode("-", $gambar);
            ?>
            <div id="gambar-slide" class="carousel slide w-50 mx-auto border-gray" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <?php
                    for($i=1; $i <= count($gambar_array)-1; $i++){
                        ?>
                        <div class="carousel-item <?php if($i==1){echo 'active';} ?>">
                            <img src="upload/<?php echo $gambar_array[0] ?>/gambar/<?php echo $gambar_array[$i] ?>" class="img-fluid">
                            <button class="delete-image"><i class="fas fa-times"></i></button>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <a class="carousel-control-prev" href="#gambar-slide" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#gambar-slide" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <?php
            break;

        case 'Alat Khusus':
            # code...
            break;

        case 'Peralatan Industi dan Jasa':
            ?>
            <div class="form-inline">
                <label>Kategori</label>
                <select class="form-control ml-auto" name="kategori" required>
                    <option <?php if($kategori=="Electric Machines"){echo "selected";} ?> >Electric Machines</option>
                    <option <?php if($kategori=="Agricultural Equipments"){echo "selected";} ?> >Agricultural Equipments</option>
                </select>
            </div>
            <?php
            break;
        
        case "Insfrastruktur Perhubungan":
            ?>
            <div class="form-inline">
                <label>Kategori</label>
                <select class="form-control ml-auto" name="kategori" required>
                    <option <?php if($kategori=="Forging"){echo "selected";} ?> >Forging</option>
                    <option <?php if($kategori=="Casting"){echo "selected";} ?> >Casting</option>
                    <option <?php if($kategori=="Railway Equipment"){echo "selected";} ?> >Railway Equipment</option>
                    <option <?php if($kategori=="Ship Equipment"){echo "selected";} ?> >Ship Equipment</option>
                </select>
            </div>
            <?php
            break;
    
        case "Layanan Pertambangan":
            ?>
            <div class="form-inline">
                <label>Kategori</label>
                <select class="form-control ml-auto" name="kategori" required>
                    <option <?php if($kategori=="Explosive"){echo "selected";} ?> >Explosive</option>
                    <option <?php if($kategori=="Explosive Services"){echo "selected";} ?> >Explosive Services</option>
                </select>
            </div>
            <?php
            break;
    
        case "Cyber Security":
            # code...
            break;
    
        case "Produk Anak Perusahaan":
            ?>
            <div class="form-inline">
                <label>Kategori</label>
                <select class="form-control ml-auto" name="kategori" required>
                    <option <?php if($kategori=="PT.PEI"){echo "selected";} ?> >PT.PEI</option>
                    <option <?php if($kategori=="PT. PGST"){echo "selected";} ?> >PT. PGST</option>
                    <option <?php if($kategori=="PT. PMU"){echo "selected";} ?> >PT. PMU</option>
                </select>
            </div>
            <?php
            break;
    
        case "Majalah":
            ?>
            <div class="form-inline">
                <label>Kategori</label>
                <select class="form-control ml-auto" name="kategori" required>
                    <option <?php if($kategori=="Bulletin"){echo "selected";} ?> >Bulletin</option>
                    <option <?php if($kategori=="Newsletter"){echo "selected";} ?> >Newsletter</option>
                </select>
            </div>
            <?php
            break;
    
        case "Katalog dan Brosur":
            # code...
            break;
    
        case "Gallery":
            # code...
            break;
        
        case "Annual Report":
            # code...
            break;
    
        case "Achievement":
            # code...
            break;
    
        default:
            echo "Tejadi Kesalahan";
            break;
    }

?>