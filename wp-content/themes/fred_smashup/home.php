<?php
    get_header();
?>

<?php 
// the query
$args = array(
    'tax_query' => array(
        array(
            'taxonomy' => 'post_format',
            'field' => 'slug',
            'terms' => array('post-format-gallery', 'post-format-audio', 'post-format-video'),
            'operator' => 'NOT IN'
        )
    )
);

 
// The Query
$the_query = new WP_Query( $args );

    if ( $the_query->have_posts() ) :
?>


            <!-- the loop -->
            <?php 
            
                while ( $the_query->have_posts() ) : $the_query->the_post(); 
                    get_template_part('content', get_post_format());
                    #echo do_shortcode("[pt_view id=bb312397pr]");
                endwhile; 
            ?>
            <!-- end of the loop -->

<?php 
        wp_reset_postdata(); 
?>

<?php 
    else : 
?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php 

    endif; 
?>

<?php
    get_footer();
?>