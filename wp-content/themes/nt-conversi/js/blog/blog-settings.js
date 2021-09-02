(function ( window, document, $, undefined ) {

    "use strict";

    jQuery(window).load(function () {
        $('.preloader').fadeOut('slow', function () {
            $(this).remove();
        });
    });
    jQuery(document).ready(function( $ ) {

        // blog list
        jQuery('.flexslider').flexslider({controlNav:true});
        jQuery(".video-responsive").fitVids();
        jQuery( ".entry-content table" ).addClass( "table table-striped" );
    });

})( window, document, jQuery );
