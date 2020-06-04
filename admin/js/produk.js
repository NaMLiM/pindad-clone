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

$("#tambah-image").click(function (e) { 
    e.preventDefault();
    if($("#gambar-grup").children().length == 1){
        alert($("#gambar-grup").children()[0].attr("name"));
    }
});

$("#jenis option").click(function (e) { 
    e.preventDefault();
    switch ($(this).filter(":selected").val()) {
        case "Senjata":
            $("#kategori-form").html($("#senjata").html());
            break;
    
        case "Munisi":
            $("#kategori-form").html($("#munisi").html());
            break;
    
        case "Kendaraan Khusus":
            $("#kategori-form").html($("#kendaraan-khusus").html());
            break;
        
        case "Alat Berat":
            $("#kategori-form").html("");
            break;
        
        case "Peralatan Industi dan Jasa":
            $("#kategori-form").html($("#peralatan-industri-dan-jasa").html());
            break;

        case "Insfrastruktur Perhubungan":
            $("#kategori-form").html($("#infrastruktur-perhubungan").html());
            break;
    
        case "Layanan Pertambangan":
            $("#kategori-form").html($("#layanan-pertambangan").html());
            break;
    
        case "Cyber Security":
            $("#kategori-form").html("");
            break;
    
        case "Produk Anak Perusahaan":
            $("#kategori-form").html($("#produk-anak-perusahaan").html());
            break;
    
        case "Majalah":
            $("#kategori-form").html($("#majalah").html());
            break;
    
        case "Katalog dan Brosur":
            $("#kategori-form").html("");
            break;
    
        case "Annual Report":
            $("#kategori-form").html("");
            break;
    
        case "Achievement":
            $("#kategori-form").html("");
            break;
    
        default:
            $("#kategori-form").html("");
            break;
    }
});