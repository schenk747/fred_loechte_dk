<?php
    get_header();
?>
<!--
<div class="col-xs-12 col-md-8">
    <a href="#">Siden er stadig under udvikling så bær over med mangler.</a>
    <br>
    <br>
</div>
-->
<div class='col-xs-12 col-md-4'>
    <div id='twitter_box'>
        <a class="twitter-timeline" data-height="600" border-top-color:#eee href="https://twitter.com/frederikloechte">
            Tweets by freddienielsen
        </a> 
        <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
    <br>
    <a href="https://twitter.com/frederikloechte" class="twitter-follow-button" data-show-count="false">
        Follow @freddienielsen
    </a>
    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    <?php
        dynamic_sidebar('frontpage_add_left');
    ?>
</div>

<div class='col-xs-12 col-md-4'>
    <div class="panel panel-default">
        <div class="panel-heading">Nyt Indhold</div>
        <div id="scroll_posts"  class="panel-body overview-panel">

            <?php
                #Arguments
                $args = array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => 10);
                // The Query
                $the_query = new WP_Query( $args );

                // The Loop
                if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) {
                        $the_query->the_post();
                        get_template_part('overview', get_post_format());
                    }
                    /* Restore original Post Data */
                    wp_reset_postdata();
                } else {
                    // no posts found
                }
            ?>
        </div>
    </div>
    
    <?php get_template_part('modal'); ?>
    
    <?php
        dynamic_sidebar('frontpage_add_right');
    ?>


<?php
    get_footer();
?>