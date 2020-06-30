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

$("#kategori-electric").click(function (e) { 
e.preventDefault();
$(".produks-card").each(function (index, element) {
    // element == this
    if($(this).attr("data-target")!="Electric Machines"){
        $(this).hide();
    }else{
        $(this).show();
    }
    $(".kategoris").find(".active").removeClass("active");
    $("#kategori-electric").addClass("active");
});
});

$("#kategori-agricultural").click(function (e) { 
e.preventDefault();
$(".produks-card").each(function (index, element) {
    // element == this
    if($(this).attr("data-target")!="Agricultural Machines"){
        $(this).hide();
    }else{
        $(this).show();
    }
    $(".kategoris").find(".active").removeClass("active");
    $("#kategori-agricultural").addClass("active");
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
