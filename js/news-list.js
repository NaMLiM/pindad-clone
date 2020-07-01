function next_page() { 
    $("html, body").animate({scrollTop: 0}, 100);
    hal += 8;
    ajax(hal);
}

function last_page() { 
    $("html, body").animate({scrollTop: 0}, 100);
    hal -= 8;
    ajax(hal);
}

function toPage(x){
    $("html, body").animate({scrollTop: 0}, 100);
    hal = x;
    ajax(hal);
}