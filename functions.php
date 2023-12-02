<?php 

function epona_files(){
    wp_enqueue_style('epona_main_styles', get_theme_file_uri('/build/style-index.css'));
    
}

add_action('wp_enqueue_scripts', 'epona_files');

?>