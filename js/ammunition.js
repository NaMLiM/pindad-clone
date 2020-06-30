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

$("#kategori-small").click(function (e) { 
e.preventDefault();
$(".produks-card").each(function (index, element) {
    // element == this
    if($(this).attr("data-target")!="Small Caliber"){
        $(this).hide();
    }else{
        $(this).show();
    }
    $(".kategoris").find(".active").removeClass("active");
    $("#kategori-small").addClass("active");
});
});

$("#kategori-big").click(function (e) { 
e.preventDefault();
$(".produks-card").each(function (index, element) {
    // element == this
    if($(this).attr("data-target")!="Big Caliber"){
        $(this).hide();
    }else{
        $(this).show();
    }
    $(".kategoris").find(".active").removeClass("active");
    $("#kategori-big").addClass("active");
});
});

$("#kategori-special").click(function (e) { 
e.preventDefault();
$(".produks-card").each(function (index, element) {
    // element == this
    if($(this).attr("data-target")!="Special Ammunition"){
        $(this).hide();
    }else{
        $(this).show();
    }
    $(".kategoris").find(".active").removeClass("active");
    $("#kategori-special").addClass("active");
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
