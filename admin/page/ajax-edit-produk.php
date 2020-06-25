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
        $deskripsi = $data["deskripsi"];
        $download = $data["download"];
    }

    
    // Fungsi
    function add_spesifikasi(){
        global $spek;
        ?>
        Specification
        <div id='toolbar-container2'>
        </div>
        <div id='editor2' class='border-gray'>
            <?php include($spek) ?>
        </div>
        <input type='hidden' name='spek' id='specification2' value="<?php include($spek) ?>">
        <script>
            DecoupledEditor
                .create( document.querySelector( '#editor2' ) )
                .then( editor => {
                    const toolbarContainer = document.querySelector( '#toolbar-container2' );

                    toolbarContainer.appendChild( editor.ui.view.toolbar.element );
                } )
                .catch( error => {
                    console.error( error );
                } );
            
            $("#editor2").click(function (e) { 
                e.preventDefault();
                $("#specification2").val($("#editor2").html());
                $(this).keyup(function () { 
                    $("#specification2").val($("#editor2").html());
                });
            });
        </script>
        <?php
    }
    function add_deskripsi(){
        global $deskripsi;
        ?>
        Deskripsi
        <div id='toolbar-container4'>
        </div>
        <div id='editor4' class='border-gray'>
            <?php include($deskripsi); ?>
        </div>
        <input type='hidden' name='deskripsi' id='deskripsi2' value="<?php include($deskripsi) ?>">
        <script>
            DecoupledEditor
                .create( document.querySelector( '#editor4' ) )
                .then( editor => {
                    const toolbarContainer = document.querySelector( '#toolbar-container4' );

                    toolbarContainer.appendChild( editor.ui.view.toolbar.element );
                } )
                .catch( error => {
                    console.error( error );
                } );
            
            $("#editor4").click(function (e) { 
                e.preventDefault();
                $("#deskripis2").val($("#editor4").html());
                $(this).keyup(function () { 
                    $("#deskripsi2").val($("#editor4").html());
                });
            });
        </script>
        <?php
    }
    function change_file(){
        ?>
        <div>
            <label for='download'>File</label>
            <input type='file' name='download' id='download' class='form-control-file ml-auto'>
        </div>
        <?php
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
            add_spesifikasi();
            add_deskripsi();
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
            add_spesifikasi();
            add_deskripsi();
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
            add_spesifikasi();
            add_deskripsi();
            break;

        case 'Alat Berat':
            add_spesifikasi();
            add_deskripsi();
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
            add_spesifikasi();
            add_deskripsi();
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
            add_spesifikasi();
            add_deskripsi();
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
            add_spesifikasi();
            add_deskripsi();
            break;
    
        case "Cyber Security":
            add_deskripsi();
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
            add_spesifikasi();
            add_deskripsi();
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
            add_deskripsi();
            break;
    
        case "Katalog dan Brosur":
            add_deskripsi();
            break;
    
        case "Gallery":
            add_deskripsi();
            break;
        
        case "Annual Report":
            add_deskripsi();
            break;
    
        case "Achievement":
            add_deskripsi();
            break;
    
        default:
            echo "Tejadi Kesalahan";
            break;
    }

?>