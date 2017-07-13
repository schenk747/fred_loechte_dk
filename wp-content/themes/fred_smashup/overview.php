<a href="<?php the_permalink(); ?>">
    <div class='p_blog_overview'>
        <?php
            $title_post = get_the_title();
            $date_post = get_the_date();
            echo "<h3>" . $title_post . "</h3>";
            echo "<time>" . $date_post . "</time>";
        ?>
    </div>
</a>