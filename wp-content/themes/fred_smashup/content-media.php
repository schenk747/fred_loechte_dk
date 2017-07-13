<?php
    if ( is_page('video') ) {
        $video_url = CFS()->get('video_url');
        $embed_video_url = str_replace('watch?v=','embed/',$video_url);
    }

?>
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    <div class='thumbnail'>
        <div class="embed-responsive embed-responsive-16by9">
            <?php 
                if ( is_page('video') ) {
                    echo "<iframe  src='" . $embed_video_url . "' frameborder='0' allowfullscreen></iframe>";
                }
                else {
                    the_content();   
                }
            ?>
        </div>
        <span class='caption'>
            <h5><?php the_title(); ?></h5>
        </span>
    </div>
</div>