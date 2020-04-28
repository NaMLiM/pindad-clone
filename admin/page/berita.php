<table class="table" id="tabel">
    <th style="background-color: orange; text-align: center;">ID</th>
    <th style="background-color: orange; text-align: center;">Judul Berita</th>
    <th style="background-color: orange; text-align: center;">Tanggal Berita</th>
    <th style="background-color: orange; text-align: center;">Isi Berita</th>
    <th style="background-color: orange; text-align: center;">Gambar Berita</th>
    <th style="background-color: orange; text-align: center;">Kategori Berita</th>
    
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

</table>