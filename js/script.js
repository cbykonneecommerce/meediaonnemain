$(document).ready(function(){

    // wow initiation
    new WOW().init();

    // navigation bar toggle
    $('#navbar-toggler').click(function(){
        $('.navbar-collapse').slideToggle(400);
    });

    // navbar bg change on scroll
    $(window).scroll(function(){
        let pos = $(window).scrollTop();
        if(pos >= 100){
            $('.navbar').addClass('cng-navbar');
        } else {
            $('.navbar').removeClass('cng-navbar');
        }
    });

    // sample video popup
    $(document).ready(function() {
        $('.popup-youtube').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
    
            fixedContentPos: false
        });
    });

    // team carousel 
    $('.team .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        dots: true,
        nav: false,
        responsiveClass: true,
        responsive:{
            0:{
                items: 1
            }, 
            600:{
                items: 2
            },
            1000:{
                items: 3
            }
        }
    });

    // Especialidades accordion
    $('.expertise-head').each(function(){
        $(this).click(function(){
            $(this).next().toggleClass('show-expertise-content');
            let icon = $(this).children('span').children("i").attr('class');

            if(icon == "fa fa-chevron-down"){
                $(this).children('span').html('<i class = "fa fa-chevron-up"></i>');
            } else {
                $(this).children('span').html('<i class = "fa fa-chevron-down"></i>');
            }
        });
    });

    // Propostas accordion
    $('.proposal-head').each(function(){
        $(this).click(function(){
            $(this).next().toggleClass('show-proposal-content');
            let icon = $(this).children('span').children("i").attr('class');

            if(icon == "fas fa-plus"){
                $(this).children('span').html('<i class = "fas fa-minus"></i>');
            } else {
                $(this).children('span').html('<i class = "fas fa-plus"></i>');
            }
        });
    });

    // testimonial carousel 
    $('.testimonial .owl-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        dots: true,
        nav: false,
        items: 1
    });

});

/*========== CONTACT FORM INPUT VALIDATION ==========*/

function sendMail() {

    if ($("#contact-form")[0].checkValidity()) {
        $("#btnSendContact").attr("disabled", true);
        $.ajax({
            type: "POST",
            url: "/actions/save-contact.php",
            data: $("#contact-form").serialize(),
            success: function (data) {
                // var alertBox = '<div class="alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Mensagem enviada</div><br />';
                // $('#contact-form').find('.messages').html(alertBox);
                $('#contact-form')[0].reset();
                $("#btnSendContact").attr("disabled", false);
                alert("E-MAIL ENVIADO ...");
            }
        });
    } else

        $("#contact-form")[0].reportValidity()


}
