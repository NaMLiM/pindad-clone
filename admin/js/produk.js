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

function tambah_image() { 
    $("#gambar-grup").html($("#gambar-grup").html()+"<input type='file' name='gambar' id='gambar-multi"+($("#gambar-grup").children().length+1)+"' ><button type='button' id='close-btn"+($("#gambar-grup").children().length+1)+"' class='btn btn-danger btn-sm' data-target='"+($("#gambar-grup").children().length+1)+"' onclick='close_btn(this)'><i class='fas fa-minus'></i></button>");
}

function close_btn(elem) { 
    $("#gambar-multi"+$(elem).attr("data-target")).remove();
    $(elem).remove();
}

function add_gambar_multi(){
    $("#form-gambar").html("<div class='row' id='gambar-form-multi'><div class='col-md-10'><label for='gambar-multi'>Gambar</label><div id='gambar-grup'><input type='file' name='gambar' id='gambar-multi' class='form-control-file ml-auto'></div></div><div class='col-md-2'><button type='button' class='btn btn-primary' id='tambah-image' onclick='tambah_image()'><i class='fas fa-plus'></i></button></div></div>");
}

$("#jenis option").click(function (e) { 
    e.preventDefault();
    switch ($(this).filter(":selected").val()) {
        case "Senjata":
            $("#kategori-form").html($("#senjata").html());
            $("#form-gambar").html($("#gambar-form").html());
            break;
    
        case "Munisi":
            $("#kategori-form").html($("#munisi").html());
            add_gambar_multi();
            break;
    
        case "Kendaraan Khusus":
            $("#kategori-form").html($("#kendaraan-khusus").html());
            add_gambar_multi();
            break;
        
        case "Alat Berat":
            $("#kategori-form").html("");
            add_gambar_multi();
            $("#form-video").html($("#video-form").html());
            break;
        
        case "Peralatan Industi dan Jasa":
            $("#kategori-form").html($("#peralatan-industri-dan-jasa").html());
            add_gambar_multi();
            break;

        case "Insfrastruktur Perhubungan":
            $("#kategori-form").html($("#infrastruktur-perhubungan").html());
            add_gambar_multi();
            break;
    
        case "Layanan Pertambangan":
            $("#kategori-form").html($("#layanan-pertambangan").html());
            add_gambar_multi();
            break;
    
        case "Cyber Security":
            $("#kategori-form").html("");
            $("#form-gambar").html($("#gambar-form").html());
            break;
    
        case "Produk Anak Perusahaan":
            $("#kategori-form").html($("#produk-anak-perusahaan").html());
            add_gambar_multi();
            break;
    
        case "Majalah":
            $("#kategori-form").html($("#majalah").html());
            $("#form-gambar").html($("#gambar-form").html());
            break;
    
        case "Katalog dan Brosur":
            $("#kategori-form").html("");
            $("#form-gambar").html($("#gambar-form").html());
            break;
    
        case "Gallery":
            $("#kategori-form").html("");
            $("#form-gambar").html($("#gambar-form").html());
            break;
        
        case "Annual Report":
            $("#kategori-form").html("");
            $("#form-gambar").html($("#gambar-form").html());
            break;
    
        case "Achievement":
            $("#kategori-form").html("");
            $("#form-gambar").html($("#gambar-form").html());
            break;
    
        default:
            $("#kategori-form").html("");
            break;
    }
});