<?php
// single-album.php
get_header();

if (have_posts()) :
    while (have_posts()) : the_post();

        // Display album information using Pods functions
        echo pods('album')->template('Albums');

    endwhile;
endif;

get_footer();
?>
