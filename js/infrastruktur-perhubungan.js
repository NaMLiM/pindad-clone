$(".card-img-top").children().hover(function () {
    // over
    $(".card-overlay").show();
    
}, function () {
    // out
    $(".card-overlay").hide();
}
);

$("#kategori-all").click(function (e) { 
e.preventDefault();
$(".produks-card").each(function (index, element) {
    // element == this
    $(this).show();
    $(".kategoris").find(".active").removeClass("active");
    $("#kategori-all").addClass("active");
});
});

$("#kategori-forging").click(function (e) { 
e.preventDefault();
$(".produks-card").each(function (index, element) {
    // element == this
    if($(this).attr("data-target")!="Forging"){
        $(this).hide();
    }else{
        $(this).show();
    }
    $(".kategoris").find(".active").removeClass("active");
    $("#kategori-forging").addClass("active");
});
});

$("#kategori-casting").click(function (e) { 
e.preventDefault();
$(".produks-card").each(function (index, element) {
    // element == this
    if($(this).attr("data-target")!="Casting"){
        $(this).hide();
    }else{
        $(this).show();
    }
    $(".kategoris").find(".active").removeClass("active");
    $("#kategori-casting").addClass("active");
});
});

$("#kategori-railway").click(function (e) { 
e.preventDefault();
$(".produks-card").each(function (index, element) {
    // element == this
    if($(this).attr("data-target")!="Railway Equipment"){
        $(this).hide();
    }else{
        $(this).show();
    }
    $(".kategoris").find(".active").removeClass("active");
    $("#kategori-railway").addClass("active");
});
});

$("#kategori-ship").click(function (e) { 
e.preventDefault();
$(".produks-card").each(function (index, element) {
    // element == this
    if($(this).attr("data-target")!="Ship Equipment"){
        $(this).hide();
    }else{
        $(this).show();
    }
    $(".kategoris").find(".active").removeClass("active");
    $("#kategori-ship").addClass("active");
});
});

// search
$("#search").keyup(function (e) { 
e.preventDefault();
$(".produks-card").each(function (index, element) {
    // element == this

    if($(this).find(".nama-produk").html().toLowerCase().indexOf($("#search").val().toLowerCase()) != -1){
        $(this).show();
    }else{
        $(this).hide();
    }
});

});
