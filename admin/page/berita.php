<div class="mt-4 w-100">
    <input type="search" placeholder="Search" id="search" name="search" class="search ml-auto float-right">
</div>

<table class="table" id="tabel">
    <thead>
        <th style="background-color: orange; text-align: center;">ID</th>
        <th style="background-color: orange; text-align: center;">Judul Berita</th>
        <th style="background-color: orange; text-align: center;">Tanggal Berita</th>
        <th style="background-color: orange; text-align: center;">Isi Berita</th>
        <th style="background-color: orange; text-align: center;">Gambar Berita</th>
        <th style="background-color: orange; text-align: center;">Kategori Berita</th>
    </thead>
    <tbody id="tbody">
        <?php
            $select = mysqli_query($connection, "select * from berita");
            while($data = mysqli_fetch_array($select)){
                echo "
                    <tr data-toggle='modal' data-target='#modelId'>
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
                        <label for="judul_berita">Judul Berita</label>
                        <input type="text"
                        class="form-control" name="judul_berita" id="judul_berita" aria-describedby="helpId" placeholder="Judul">
                        <label for="tanggal_berita">Tanggal</label>
                        <input type="text" class="form-control" name="tanggal_berita" id="tanggal_berita" aria-describedby="helpId" placeholder="Tanggal">
                        <label for="isi_berita">Isi Berita</label>
                        <input type="text" class="form-control" name="isi_berita" id="isi_berita" aria-describedby="helpId" placeholder="Isi Berita" onclick="" readonly>
                        <label for="gambar_berita">Gambar</label>
                        <input type="text" class="form-control" name="gambar_berita" id="gambar_berita" aria-describedby="helpId" placeholder="Gambar">
                        <label for="kategori">Kategori</label>
                        <input type="text" class="form-control" name="kategori" id="kategori" aria-describedby="helpId" placeholder="Kategori">
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
            $("#judul_berita").val(this.cells[1].innerHTML);
            $("#tanggal_berita").val(this.cells[2].innerHTML);
            $("#isi_berita").attr("onclick", "window.open('write-news.php?news="+this.cells[3].innerHTML+"')");
            $("#isi_berita").val(this.cells[3].innerHTML);
            $("#gambar_berita").val(this.cells[4].innerHTML);
            $("#kategori").val(this.cells[5].innerHTML);
            $("#form").attr("action","system/edit-berita.php?page=berita");
            $("#delete").attr("href","system/delete.php?page=berita&id="+this.cells[0].innerHTML);
        });
    }
</script>