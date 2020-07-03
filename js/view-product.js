var timeout;
var translateX = 0;
var count = $("#related-produk").children().length-3;
var count_stop = count;
function translate(){
    $(".related-produk-card").css({
        "transform": "translateX("+translateX+"%)"
        
    });
    if(count>0){
        translateX -= 108;
        count -= 1;
        if(count==0){
            count = -count_stop;
        }
    }else{
        translateX += 108;
        count += 1;
        if(count==0){
            count = count_stop;
        }
    }
    timeout = setTimeout(translate, 4000);
}

if(count >= 1){
    translate();
}
