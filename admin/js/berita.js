DecoupledEditor
    .create( document.querySelector( '#editor1' ) )
    .then( editor => {
        const toolbarContainer = document.querySelector( '#toolbar-container1' );

        toolbarContainer.appendChild( editor.ui.view.toolbar.element );
    } )
    .catch( error => {
        console.error( error );
    } );

$("#editor1").click(function (e) { 
    e.preventDefault();
    $("#isi_berita").val($("#editor1").html());
    $(this).keyup(function () { 
        $("#isi_berita").val($("#editor1").html());
    });
});


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