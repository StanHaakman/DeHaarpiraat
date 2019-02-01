$(document).ready(function () {
    $(".btn-open").on('click', function (e) {
        // e.stopPropagation();
        $(".overlay").fadeToggle(400);
        console.log("hoi");
        $(this).toggleClass('btn-open').toggleClass('btn-close');

    });

    let url = window.location;
    $('ul.nav-gray a[href="'+ url.pathname +'"]').parent().addClass('active');
    $('ul.nav-gray a').filter(function() {
        return this.href == url;
    }).parent().addClass('active');
    console.log(url.pathname);
});


$('.overlay').on('click', function(){
    console.log("ho");
    $(".overlay").fadeToggle(200);
    $(".button a").toggleClass('btn-open').toggleClass('btn-close');
    open = false;
});

$(window).on("scroll", function() {
    if($(window).scrollTop()) {
        $('.nav-gray').addClass('black').removeAttr('id');
    }

    else {
        $('.nav-gray').removeClass('black').attr('id', 'not-black');
    }
});

function mailAlert(){
    alert('Outlook wordt geopend....')
}

