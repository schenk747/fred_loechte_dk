<?php
    #Get the youtube video url
    $video_url = CFS()->get('video_url');
    $embed_video_url = str_replace('watch?v=','embed/',$video_url);
    $date_post = get_the_date();
    $title_post = get_the_title();
?>

<a data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $embed_video_url; ?>" data-title="<?php echo $title_post; ?>"> 
    <div class="p_video_overview">
        <?php 
            echo "<h3>" . $title_post . "</h3>";
            echo "<time>" . $date_post . "</time>";                
        ?>
    </div>
</a>