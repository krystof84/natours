<?php 

function natours_sanitize_image( $input ){
 
    /* default output */
    $output = '';
 
    /* check file type */
    $filetype = wp_check_filetype( $input );
    $mime_type = $filetype['type'];
 
    /* only mime type "image" allowed */
    if ( strpos( $mime_type, 'image' ) !== false ){
        $output = $input;
    }
 
    return $output;
}