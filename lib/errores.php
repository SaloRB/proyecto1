<?php                  

function miGestorErrores( $errno, $errstr, $errfile, $errline ) {
    
    if( !(error_reporting() & $errno ) ) {
        return;
    }
    
    switch( $errno ) {
        case E_USER_ERROR:
            echo "Error: $errstr";
            break;
            exit(1);
            
        case E_USER_WARNING:
            echo "Advertencia: $errstr";
            exit;
            break;
            
        case E_USER_NOTICE:
            echo "$errstr";
            break;
    }
}

set_error_handler( 'miGestorErrores' );
