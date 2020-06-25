var table = document.getElementById("tabel");
var rows = table.rows;
for (var i = 1; i < rows.length; i++) {
    rows[i].onclick = (function (e) {
        // $("#id").val(this.cells[0].innerHTML);
        // $("#nama_produk").val(this.cells[1].innerHTML);
        // $("#jenis_produk").val(this.cells[2].innerHTML);
        // $("#kategori").val(this.cells[3].innerHTML);
        // $("#gambar").val(this.cells[4].innerHTML);
        // $("#video").val(this.cells[5].innerHTML);
        // $("#spek").val(this.cells[6].innerHTML);
        // $("#form").attr("action","system/edit-produk.php?page=produk");
        // $("#delete").attr("href","system/delete.php?page=produk&id="+this.cells[0].innerHTML);
        var id_temp = this.cells[0].innerHTML;
        $("#edit-modal").load("page/ajax-edit-produk.php", {id:id_temp}, function (response, status, request) {
            this; // dom element
        });
        $("#delete").attr("href", "system/delete_produk.php?id="+id_temp);
        $("#form_edit").attr("action", "system/edit_produk.php?id="+id_temp);
    });
}


var multiple_gambar = 1; //----variabel untuk gambar multi---
function tambah_image() { 
    multiple_gambar++;
    $("#jumlah_gambar").val(multiple_gambar);
    $("#gambar-grup").html($("#gambar-grup").html()+"<input type='file' name='gambar"+multiple_gambar+"' id='gambar-multi"+multiple_gambar+"' ><button type='button' id='close-btn"+multiple_gambar+"' class='btn btn-danger btn-sm' data-target='"+multiple_gambar+"' onclick='close_btn(this)'><i class='fas fa-minus'></i></button>");
}

function close_btn(elem) { 
    multiple_gambar--;
    $("#jumlah_gambar").val(multiple_gambar);
    $("#gambar-multi"+$(elem).attr("data-target")).remove();
    $(elem).remove();
}

function add_gambar_multi(){
    $("#form-gambar").html("<div class='row' id='gambar-form-multi'><div class='col-md-10'><label for='gambar-multi'>Gambar</label><div id='gambar-grup'><input type='file' name='gambar1' id='gambar-multi' class='form-control-file ml-auto' required></div></div><div class='col-md-2'><button type='button' class='btn btn-primary' id='tambah-image' onclick='tambah_image()'><i class='fas fa-plus'></i></button></div></div><input type='hidden' name='jumlah_gambar' id='jumlah_gambar' value=1>");
    multiple_gambar = 1;
}

function add_specification() {
    $("#form-specification").html("Specification<div id='toolbar-container'></div><div id='editor' class='border-gray'></div><input type='hidden' name='spek' id='specification'>");
    DecoupledEditor
        .create( document.querySelector( '#editor' ) )
        .then( editor => {
            const toolbarContainer = document.querySelector( '#toolbar-container' );

            toolbarContainer.appendChild( editor.ui.view.toolbar.element );
        } )
        .catch( error => {
            console.error( error );
        } );
    
    $("#editor").click(function (e) { 
        e.preventDefault();
        $("#specification").val($("#editor").html());
        $(this).keyup(function () { 
            $("#specification").val($("#editor").html());
        });
    });
}

function add_deskripsi() {
    $("#form-deskripsi").html("Deskripsi<div id='toolbar-container3'></div><div id='editor3' class='border-gray'></div><input type='hidden' name='deskripsi' id='deskripsi'>");
    DecoupledEditor
        .create( document.querySelector( '#editor3' ) )
        .then( editor => {
            const toolbarContainer = document.querySelector( '#toolbar-container3' );

            toolbarContainer.appendChild( editor.ui.view.toolbar.element );
        } )
        .catch( error => {
            console.error( error );
        } );
    
    $("#editor3").click(function (e) { 
        e.preventDefault();
        $("#deskripsi").val($("#editor3").html());
        $(this).keyup(function () { 
            $("#deskripsi").val($("#editor3").html());
        });
    });
}

function add_download() {
    $("#form-download").html("<label for='download'>File</label><input type='file' name='download' id='download' class='form-control-file ml-auto' required>");
}

$("#jenis select").change(function (e) { 
    e.preventDefault();
    switch ($(this).val()) {
        case "Senjata":
            $("#kategori-form").html($("#senjata").html());
            add_gambar_multi();
            $("#form-video").html("");
            add_specification();
            add_deskripsi();
            $("#form-download").html("");
            break;
    
        case "Munisi":
            $("#kategori-form").html($("#munisi").html());
            add_gambar_multi();
            $("#form-video").html("");
            add_specification();
            add_deskripsi();
            $("#form-download").html("");
            break;
    
        case "Kendaraan Khusus":
            $("#kategori-form").html($("#kendaraan-khusus").html());
            add_gambar_multi();
            $("#form-video").html("");
            add_specification();
            add_deskripsi();
            $("#form-download").html("");
            break;
        
        case "Alat Berat":
            $("#kategori-form").html("");
            add_gambar_multi();
            $("#form-video").html($("#video-form").html());
            add_specification();
            add_deskripsi();
            $("#form-download").html("");
            break;
        
        case "Peralatan Industi dan Jasa":
            $("#kategori-form").html($("#peralatan-industri-dan-jasa").html());
            add_gambar_multi();
            $("#form-video").html("");
            add_specification();
            add_deskripsi();
            $("#form-download").html("");
            break;

        case "Insfrastruktur Perhubungan":
            $("#kategori-form").html($("#infrastruktur-perhubungan").html());
            add_gambar_multi();
            $("#form-video").html("");
            add_specification();
            add_deskripsi();
            $("#form-download").html("");
            break;
    
        case "Layanan Pertambangan":
            $("#kategori-form").html($("#layanan-pertambangan").html());
            add_gambar_multi();
            $("#form-video").html("");
            add_specification();
            add_deskripsi();
            $("#form-download").html("");
            break;
    
        case "Cyber Security":
            $("#kategori-form").html("");
            $("#form-gambar").html("");
            $("#form-video").html("");
            $("#form-specification").html("");
            add_deskripsi();
            add_download();
            break;
    
        case "Produk Anak Perusahaan":
            $("#kategori-form").html($("#produk-anak-perusahaan").html());
            add_gambar_multi();
            $("#form-video").html("");
            add_specification();
            add_deskripsi();
            $("#form-download").html("");
            break;
    
        case "Majalah":
            $("#kategori-form").html($("#majalah").html());
            $("#form-gambar").html($("#gambar-form").html());
            $("#form-video").html("");
            $("#form-specification").html("");
            add_deskripsi();
            add_download();
            break;
    
        case "Katalog dan Brosur":
            $("#kategori-form").html("");
            $("#form-gambar").html($("#gambar-form").html());
            $("#form-video").html("");
            $("#form-specification").html("");
            add_deskripsi();
            add_download();
            break;
    
        case "Gallery":
            $("#kategori-form").html("");
            $("#form-gambar").html($("#gambar-form").html());
            $("#form-video").html("");
            $("#form-specification").html("");
            add_deskripsi();
            add_download();
            break;
        
        case "Annual Report":
            $("#kategori-form").html("");
            $("#form-gambar").html($("#gambar-form").html());
            $("#form-video").html("");
            $("#form-specification").html("");
            add_deskripsi();
            add_download();
            break;
    
        case "Achievement":
            $("#kategori-form").html("");
            $("#form-gambar").html($("#gambar-form").html());
            $("#form-video").html("");
            $("#form-specification").html("");
            add_deskripsi();
            add_download();
            break;
    
        default:
            $("#kategori-form").html("");
            break;
    }
});

// Edit
function delete_image(ini) {
    if($("#image-now").val().split("-").length >= 2){
        $("#"+$(ini).attr("data-target")).remove();
        $(ini).remove();
    }
}