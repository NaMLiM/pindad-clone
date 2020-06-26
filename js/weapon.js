$(".card-img-top").hover(function () {
        // over
        $(".card-overlay").show();
        
    }, function () {
        // out
        $(".card-overlay").hide();
    }
);