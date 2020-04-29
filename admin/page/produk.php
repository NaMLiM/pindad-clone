<div class="mt-4 w-100">
    <input type="search" placeholder="Search" id="search" name="search" class="search ml-auto float-right">
</div>

<table class="table" id="tabel">
    <thead>
        <th style="background-color: orange; text-align: center;">ID</th>
        <th style="background-color: orange; text-align: center;">Nama Produk</th>
        <th style="background-color: orange; text-align: center;">Jenis Produk</th>
        <th style="background-color: orange; text-align: center;">Kategori</th>
        <th style="background-color: orange; text-align: center;">Gambar</th>
        <th style="background-color: orange; text-align: center;">Video</th>
        <th style="background-color: orange; text-align: center;">Spek</th>
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
                    </tr>
                ";
            }
        ?>
    </tbody>

</table>

<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <form class="form-group" action="" method="POST" id="form">
                <div class="modal-body">
                        <label for="id">ID</label>
                        <input type="text"
                        class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="ID" readonly>
                        <label for="nama_produk">Nama Produk</label>
                        <input type="text"
                        class="form-control" name="nama_produk" id="nama_produk" aria-describedby="helpId" placeholder="Nama Produk">
                        <label for="jenis_produk">Jenis Produk</label>
                        <input type="text" class="form-control" name="jenis_produk" id="jenis_produk" aria-describedby="helpId" placeholder="Jenis Produk">
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

<script>
    var table = document.getElementById("tabel");
    var rows = table.rows;
    for (var i = 1; i < rows.length; i++) {
        rows[i].onclick = (function (e) {
            $("#id").val(this.cells[0].innerHTML);
            $("#nama_produk").val(this.cells[1].innerHTML);
            $("#jenis_produk").val(this.cells[2].innerHTML);
            $("#kategori").val(this.cells[3].innerHTML);
            $("#gambar").val(this.cells[4].innerHTML);
            $("#video").val(this.cells[5].innerHTML);
            $("#spek").val(this.cells[6].innerHTML);
            $("#form").attr("action","system/edit-produk.php?page=produk");
            $("#delete").attr("href","system/delete.php?page=produk&id="+this.cells[0].innerHTML);
        });
    }
</script>