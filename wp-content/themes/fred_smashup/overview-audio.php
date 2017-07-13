<?php 
    #Get the soundcloud iframe and extract the url
    $content = get_the_content();
    preg_match('/src="([^"]+)"/', $content, $match);
    $soundcloud_url = $match[1];
    $date_post = get_the_date();
    $title_post = get_the_title();
?>

<a data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $soundcloud_url; ?>" data-title="<?php echo $title_post; ?>">
    <div class="p_audio_overview">
        <?php
            echo "<h3>" . $title_post . "</h3>";
            echo "<time>" . $date_post . "</time>";
        ?>
    </div>
</a>