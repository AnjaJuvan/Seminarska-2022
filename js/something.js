// Open JQUERY UI Dialog

$( function() {
    $( "#dialog" ).dialog({
        autoOpen: false,
        show: {
            effect: "blind",
            duration: 1000
        },
        hide: {
            effect: "explode",
            duration: 1000
        }
    });

    $( ".js-opener" ).on( "click", function() {
        
        $( "#dialog" ).dialog( "open" );
    });
} );


// Open JQUERY UI Dialog for password
$( function() {
    $( "#dialogPassword" ).dialog({
        autoOpen: false,
        show: {
            effect: "blind",
            duration: 1000
        },
        hide: {
            effect: "explode",
            duration: 1000
        }
    });

    $( "#passwordOpener" ).on( "click", function() {
        $( "#dialogPassword" ).dialog( "open" );
    });
} );