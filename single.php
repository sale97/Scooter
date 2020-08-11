<?php
get_header();

$args = [
    'post_type' => 'post'
];

$query = new WP_Query($args);
if( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
        the_content();
    }
}

get_footer();
