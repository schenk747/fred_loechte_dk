<?php
    get_header();
?>

<?php

$args = array(
    'tax_query' => array(
        array(
            'taxonomy' => 'post_format',
            'field' => 'slug',
            'terms' => 'post-format-audio',
        )
    )
);

 
// The Query
$the_query = new WP_Query( $args );
 
// The Loop
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        get_template_part('content', 'media');
    }
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();

?>


<?php
    get_footer();
?>