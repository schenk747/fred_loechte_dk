<div class="col-xs-12 blog-overview">
    <article>
        <span class="glyphicon glyphicon-time"></span> <?php echo get_the_date(); ?>
        <br>
        <?php the_content(); ?>
        <?php $url = urlencode(get_permalink()); ?>
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>" class="btn btn-primary" role="button"><i class="fa fa-facebook" aria-hidden="true"></i> Share</a>
        <a href="https://twitter.com/intent/tweet?url=<?php echo $url; ?>&text=<?php echo get_the_title(); ?>&via=freddienielsen" class="twitter-btn btn btn-info" role="button"><i class="fa fa-twitter" aria-hidden="true"></i> TWEET</a>
    </article>
</div>