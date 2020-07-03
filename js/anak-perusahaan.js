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

$("#kategori-pt-pei").click(function (e) { 
e.preventDefault();
$(".produks-card").each(function (index, element) {
    // element == this
    if($(this).attr("data-target")!="PT.PEI"){
        $(this).hide();
    }else{
        $(this).show();
    }
    $(".kategoris").find(".active").removeClass("active");
    $("#kategori-pt-pei").addClass("active");
});
});

$("#kategori-pt-pgst").click(function (e) { 
e.preventDefault();
$(".produks-card").each(function (index, element) {
    // element == this
    if($(this).attr("data-target")!="PT. PGST"){
        $(this).hide();
    }else{
        $(this).show();
    }
    $(".kategoris").find(".active").removeClass("active");
    $("#kategori-pt-pgsts").addClass("active");
});
});

$("#kategori-pt-pmu").click(function (e) { 
e.preventDefault();
$(".produks-card").each(function (index, element) {
    // element == this
    if($(this).attr("data-target")!="PT. PMU"){
        $(this).hide();
    }else{
        $(this).show();
    }
    $(".kategoris").find(".active").removeClass("active");
    $("#kategori-pt-pmu").addClass("active");
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
