<script src="https://cdn.ckeditor.com/ckeditor5/19.1.1/decoupled-document/ckeditor.js"></script>



<div class="mt-4 w-100">
    <input type="search" placeholder="Search" id="search" name="search" class="search ml-auto float-right">
</div>

<div style="overflow-y: scroll; height: 80vh; width: 100%;" class="d-block">
    <table class="table" id="tabel">
        <thead class="sticky-top">
            <th style="background-color: #204a87ff; text-align: center;">ID</th>
            <th style="background-color: #204a87ff; text-align: center;">Nama Produk</th>
            <th style="background-color: #204a87ff; text-align: center;">Jenis Produk</th>
            <th style="background-color: #204a87ff; text-align: center;">Kategori</th>
            <th style="background-color: #204a87ff; text-align: center;">Gambar</th>
            <th style="background-color: #204a87ff; text-align: center;">Video</th>
            <th style="background-color: #204a87ff; text-align: center;">Spek</th>
            <th style="background-color: #204a87ff; text-align: center;">Deskripsi</th>
            <th style="background-color: #204a87ff; text-align: center;">Download</th>
        </thead>
        <tbody id="tbody">
            <?php
                $select = mysqli_query($connection, "select * from produk");
                while($data = mysqli_fetch_array($select)){
                    echo "
                        <tr data-toggle='modal' data-target='#modelId'>
                            <td class='text-center'>".$data["id_produk"]."</td>
                            <td class='text-center'>".$data["nama_produk"]."</td>
                            <td class='text-center'>".$data["jenis_produk"]."</td>
                            <td class='text-center'>".$data["kategori"]."</td>
                            <td class='text-center'>".$data["gambar"]."</td>
                            <td class='text-center'>".$data["video"]."</td>
                            <td class='text-center'>".$data["spek"]."</td>
                            <td class='text-center'>".$data["deskripsi"]."</td>
                            <td class='text-center'>".$data["download"]."</td>
                        </tr>
                    ";
                }
            ?>
        </tbody>

    </table>
</div>


<a href="#" class="create" data-toggle="modal" data-target="#addData"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>

<!-- Modal Edit-->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <form class="form-group" action="" method="POST" id="form_edit">
                <div class="modal-body" id="edit-modal">
                        <label for="id">ID</label>
                        <input type="text"
                        class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="ID" readonly>
                        <label for="nama_produk2">Nama Produk</label>
                        <input type="text"
                        class="form-control" name="nama_produk" id="nama_produk2" aria-describedby="helpId" placeholder="Nama Produk">
                        <label for="jenis_produk1">Jenis Produk</label>
                        <input type="text" class="form-control" name="jenis_produk" id="jenis_produk1" aria-describedby="helpId" placeholder="Jenis Produk">
                        <label for="kategori">Kategori</label>
                        <input type="text" class="form-control" name="kategori" id="kategori" aria-describedby="helpId" placeholder="Kategori">
                        <label for="gambar">Gambar</label>
                        <input type="text" class="form-control" name="gambar" id="gambar" aria-describedby="helpId" placeholder="Gambar">
                        <label for="video">Video</label>
                        <input type="text" class="form-control" name="video" id="video" aria-describedby="helpId" placeholder="Video">
                        <label for="spek">Spek</label>
                        <input type="text" class="form-control" name="spek" id="spek" aria-describedby="helpId" placeholder="Spek">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mr-auto" data-dismiss="modal">Close</button>
                    <a href="#" class="btn btn-danger" id="delete">Delete</a>
                    <input type="submit" value="Edit" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Tambah-->
<div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <form action="system/insert-produk.php" method="post" class="form-group" enctype="multipart/form-data">
                    <div class="form-inline">
                        <label for="nama_produk1">Nama Produk</label>
                        <input type="text" name="nama_produk" id="nama_produk1" placeholder="Nama Produk" class="form-control ml-auto" required>
                    </div>
                    <div class="form-inline" id="jenis">
                      <label for="jenis_produk2">Jenis Produk</label>
                      <select class="form-control ml-auto" name="jenis_produk" id="jenis_produk2"  required>
                        <option disabled selected>--Pilih--</option>
                        <option>Senjata</option>
                        <option>Munisi</option>
                        <option>Kendaraan Khusus</option>
                        <option>Alat Berat</option>
                        <option>Peralatan Industri dan Jasa</option>
                        <option>Infrastruktur Perhubungan</option>
                        <option>Layanan Pertambangan</option>
                        <option>Cyber Security</option>
                        <option>Produk Anak Perusahaan</option>
                        <option>Majalah</option>
                        <option>Katalog dan Brosur</option>
                        <option>Gallery</option>
                        <option>Annual Report</option>
                        <option>Achievement</option>
                      </select>
                    </div>
                    <div class="form-inline" id="kategori-form">

                    </div>
                    <div id="form-gambar" >

                    </div>
                    <div id="form-video">

                    </div>
                    <div id="form-specification">

                    </div>
                    <div id="form-deskripsi">
                        
                    </div>
                    <div id="form-download">
                        
                    </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" name="submit" value="Save" class="btn btn-primary">
            </form>
            </div>
        </div>
    </div>
</div>

<!-- Kategori -->
<div class="form-inline" style="display: none;" id="senjata">
    <label for="kategori1">Kategori</label>
    <select class="form-control ml-auto" name="kategori" id="kategori1" required>
        <option>Rifles</option>
        <option>Sniper Rifles</option>
        <option>Machine Guns</option>
        <option>Grenade Launcher</option>
        <option>Mortir</option>
        <option>Pistols</option>
        <option>Shotguns</option>
        <option>Submachine Guns</option>
    </select>
</div>
<div class="form-inline" style="display: none;" id="munisi">
    <label for="kategori2">Kategori</label>
    <select class="form-control ml-auto" name="kategori" id="kategori2" required>
        <option>Small Caliber</option>
        <option>Big Caliber</option>
        <option>Special Ammunition</option>
    </select>
</div>
<div class="form-inline" style="display: none;" id="kendaraan-khusus">
    <label for="kategori3">Kategori</label>
    <select class="form-control ml-auto" name="kategori" id="kategori3" required>
        <option>4 x 4 Komodo</option>
        <option>6 x 6 Anoa</option>
    </select>
</div>
<div class="form-inline" style="display: none;" id="peralatan-industri-dan-jasa">
    <label for="kategori4">Kategori</label>
    <select class="form-control ml-auto" name="kategori" id="kategori4" required>
        <option>Electric Machines</option>
        <option>Agricultural Machines</option>
    </select>
</div>
<div class="form-inline" style="display: none;" id="infrastruktur-perhubungan">
    <label for="kategori5">Kategori</label>
    <select class="form-control ml-auto" name="kategori" id="kategori5" required>
        <option>Forging</option>
        <option>Casting</option>
        <option>Railway Equipment</option>
        <option>Ship Equipment</option>
    </select>
</div>
<div class="form-inline" style="display: none;" id="layanan-pertambangan">
    <label for="kategori6">Kategori</label>
    <select class="form-control ml-auto" name="kategori" id="kategori6" required>
        <option>Explosive</option>
        <option>Explosive Services</option>
    </select>
</div>
<div class="form-inline" style="display: none;" id="produk-anak-perusahaan">
    <label for="kategori7">Kategori</label>
    <select class="form-control ml-auto" name="kategori" id="kategori7" required>
        <option>PT.PEI</option>
        <option>PT. PGST</option>
        <option>PT. PMU</option>
    </select>
</div>
<div class="form-inline" style="display: none;" id="majalah">
    <label for="kategori8">Kategori</label>
    <select class="form-control ml-auto" name="kategori" id="kategori8" required>
        <option>Bulletin</option>
        <option>Newsletter</option>
    </select>
</div>

<!-- Gambar -->
<!-- <div id="gambar-form-plus">
    <input type="file" name="gambar" id="gambar-multi1" class=""><button type="button" id="close-btn" data-target="1" class="btn btn-danger btn-sm" onclick="close_btn(this)"><i class="fas fa-minus"></i></button>
</div> -->


<div class="form-inline" id="gambar-form" style="display: none;">
    <label for="gambar">Gambar</label>
    <input type="file" name="gambar" id="gambar" class="form-control-file ml-auto" required>
</div>
<div id="video-form" style="display: none;">
    <label for="video">Video</label>
    <input type="file" name="video" id="video" class="form-control-file ml-auto" required>
</div>
<!-- <div class="row" id="gambar-form-multi" style="display: none;">
    <div class="col-md-10">
        <label for="gambar-multi">Gambar</label>
        <div id="gambar-grup">
            <input type="file" name="gambar" id="gambar-multi" class="form-control-file ml-auto">
        </div>
    </div>
    <div class="col-md-2">
        <button type="button" class="btn btn-primary" id="tambah-image"><i class="fas fa-plus"></i></button>
    </div>
</div> -->