$(function () {
    setNavigation();
});

function setNavigation() {
    var path = window.location.pathname;
    path = path.replace( /\/$/, "" );
    path = decodeURIComponent( path );
    path = path.replace('/', "");

    // les menus 
    var index = true;
    $( "#menu ul li a" ).each( function () {
        var href = $( this ).attr( 'href' ).split( '/' );
        href = href[href.length - 1 ];
        href = href.trim( ' ' );

        if(  href  === path ) {
            $( this ).closest( 'li' ).addClass( 'active' );
            index = false;
            $( '#logo h1 a' ).removeClass( 'active' );
        }
    });

    // pour le logo qui sert d'acceuil
    $( '.title-area li' ).removeClass( 'active' );
    if( index ) {
            $( '#logo h1 a' ).addClass( 'active' );
    }
}
