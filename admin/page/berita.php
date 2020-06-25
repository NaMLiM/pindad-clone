<script src="https://cdn.ckeditor.com/ckeditor5/19.1.1/decoupled-document/ckeditor.js"></script>


<div class="mt-4 w-100">
    <input type="search" placeholder="Search" id="search" name="search" class="search ml-auto float-right">
</div>

<table class="table" id="tabel">
    <thead>
        <th style="background-color: #204a87ff; text-align: center;">ID</th>
        <th style="background-color: #204a87ff; text-align: center;">Judul Berita</th>
        <th style="background-color: #204a87ff; text-align: center;">Tanggal Berita</th>
        <th style="background-color: #204a87ff; text-align: center;">Isi Berita</th>
        <th style="background-color: #204a87ff; text-align: center;">Gambar Berita</th>
        <th style="background-color: #204a87ff; text-align: center;">Kategori Berita</th>
    </thead>
    <tbody id="tbody">
        <?php
            $select = mysqli_query($connection, "select * from berita");
            while($data = mysqli_fetch_array($select)){
                echo "
                    <tr data-toggle='modal' data-target='#update-berita'>
                        <td class='text-center'>".$data["id_berita"]."</td>
                        <td class='text-center'>".$data["judul_berita"]."</td>
                        <td class='text-center'>".$data["tanggal"]."</td>
                        <td class='text-center'>".$data["isi"]."</td>
                        <td class='text-center'>".$data["gambar"]."</td>
                        <td class='text-center'>".$data["kategori"]."</td>
                    </tr>
                ";
            }
        ?>
    </tbody>
</table>


<!-- Modal Update -->
<div class="modal fade" id="update-berita" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <form class="form-group" action="system/edit-berita.php" method="POST" id="form-edit" enctype="multipart/form-data">
                <div class="modal-body" id="edit-modal">
                        
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mr-auto" data-dismiss="modal">Close</button>
                    <a href="#" class="btn btn-danger" id="delete">Delete</a>
                    <input type="submit" value="Update" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Insert -->
<div class="modal fade" id="insert-berita" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <form class="form-group" action="system/insert_berita.php" method="POST" id="form" enctype="multipart/form-data">
                <div class="modal-body">
                        <label for="judul_berita">Judul Berita</label>
                        <input type="text"
                        class="form-control" name="judul_berita" id="judul_berita" aria-describedby="helpId" placeholder="Judul" required>

                        <label for="kategori">Kategori</label>
                        <select class="form-control" name="kategori" id="kategori" aria-describedby="helpId" placeholder="Kategori" required>
                            <option disabled selected>-- Pilih --</option>
                            <option value="press-release">Siaran Press</option>
                            <option value="pindad-in-news">Pindad Dalam Berita</option>
                            <option value="procurement-info">Informasi Pengadaan</option>
                            <option value="informasi-serta-merta">Informasi Serta Merta</option>
                            <option value="new-innovation">Inovasi Baru</option>
                        </select>
                        
                        <div class='row' id='gambar-form-multi'>
                            <div class='col-md-10'>
                                <label for='gambar-multi'>Gambar</label>
                                <div id='gambar-grup'>
                                    <input type='file' name='gambar1' id='gambar-multi' class='form-control-file ml-auto' required>
                                </div>
                            </div>
                            <div class='col-md-2'>
                                <button type='button' class='btn btn-primary' id='tambah-image' onclick='tambah_image()'><i class='fas fa-plus'></i></button>
                            </div>
                        </div>
                        <input type='hidden' name='jumlah_gambar' id='jumlah_gambar' value=1>

                        <label for="toolbar-container1">Isi Berita</label>
                        <div id="toolbar-container1"></div>
                        <div id="editor1" class="border-gray"></div>
                        <textarea name="isi_berita" id="isi_berita" style="display: none;"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mr-auto" data-dismiss="modal">Close</button>
                    <input type="submit" value="Save" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>

<a href="#" class="create"  data-toggle="modal" data-target="#insert-berita"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
