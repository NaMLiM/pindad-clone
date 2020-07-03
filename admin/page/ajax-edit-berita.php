<?php

    include("../system/connection.php");

    $id = $_POST["id"];

    $select = mysqli_query($connection, "select * from berita where id_berita=$id");
    $data = mysqli_fetch_array($select);

?>
<label for="judul_berita2">Judul Berita</label>
<input type="text" class="form-control" name="judul_berita" id="judul_berita1" value="<?php echo $data['judul_berita']; ?>" aria-describedby="helpId" placeholder="Judul" required>

<label for="kategori2">Kategori</label>
<select class="form-control" name="kategori" id="kategori2" aria-describedby="helpId" placeholder="Kategori" required>
    <option value="press-release" <?php if($data['kategori']=="press-release"){echo "selected";} ?> >Siaran Press</option>
    <option value="pindad-in-news" <?php if($data['kategori']=="pindad-in-news"){echo "selected";} ?> >Pindad Dalam Berita</option>
    <option value="procurement-info" <?php if($data['kategori']=="procurement-info"){echo "selected";} ?> >Informasi Pengadaan</option>
    <option value="informasi-serta-merta" <?php if($data['kategori']=="informasi-serta-merta"){echo "selected";} ?> >Informasi Serta Merta</option>
    <option value="new-innovation" <?php if($data['kategori']=="new-innovation"){echo "selected";} ?> >Inovasi Baru</option>
    <option value="career-info" <?php if($data['kategori']=="career-info"){echo "selected";} ?> >Informasi Karir</option>
</select>
<div class='row' id='gambar-form-multi'>
    <div class='col-md-4'>
        <label for='gambar-multi'>Gambar</label>
        <div id='gambar-grup'>
            <input type='file' name='gambar1' id='gambar-multi' class='form-control-file ml-auto'>
        </div>
    </div>
    <div class='col-md-8'>
        <button type='button' class='btn btn-primary' id='tambah-image' onclick='tambah_image()'><i class='fas fa-plus'></i></button>
    </div>
</div>
<input type='hidden' name='jumlah_gambar' id='jumlah_gambar' value=1>

<label for="toolbar-container2">Isi Berita</label>
<div id="toolbar-container2"></div>
<div id="editor2" class="border-gray"><?php include($data['isi']); ?></div>
<textarea name="isi_berita" id="isi_berita1" style="display: none;"><?php include($data['isi']); ?></textarea>

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
        $("#isi_berita1").html($("#editor2").html());
        $(this).keyup(function () { 
            $("#isi_berita1").html($("#editor2").html());
        });
    });
</script>
