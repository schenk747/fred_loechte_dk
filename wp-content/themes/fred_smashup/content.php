<div class="col-xs-12 col-sm-6 col-md-4 blog-overview">
    <article>
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-responsive">
        <h4><a href="singlepost.html"><?php the_title(); ?></a></h4>
      <span class="glyphicon glyphicon-time"></span> <?php echo get_the_date(); ?> <br>
        <a class="btn btn-default btn-xs read-more" href="<?php echo get_permalink(); ?>">Læs Mere</a>
    </article>
</div>