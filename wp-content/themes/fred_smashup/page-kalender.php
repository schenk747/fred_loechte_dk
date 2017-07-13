<?php
    get_header();
?>


<div class='table-responsive'>
    <table class="table table-responsive calender_table" style="font-size:14px">
        <thead>
          <tr>
            <th>Date</th>
            <th>Event</th>
            <th>Category</th>
            <th>Surface</th>
            <th>Streaming</th>
            <th>Round</th>
          </tr>
        </thead>
        <tbody>

            <?php
                $args = array(  'post_type' => 'tennis_events', 
                                'posts_per_page' => -1  ,
                                'meta_key' => 'event_date',
                                'order' => 'DESC'
                             );
                $loop = new WP_Query( $args );
                while( $loop->have_posts() ) : $loop->the_post();
                    $tournament_link = CFS()->get('event_tournament_website_link');
                    $location = CFS()->get('event_location');
                    $date = CFS()->get('event_date');
                    $name = CFS()->get('event_name');
                    $category = CFS()->get('event_category');
                    $surface = CFS()->get('event_surface');
                    $streaming = CFS()->get('event_streaming');
                    $round = CFS()->get('event_round');
                    $current = CFS()->get('event_current');

            ?>
                    <tr <?php if($current) {echo "class='success'";}?>>
                        <td><?php echo $date;?></td>
                        <td>
                            <?php
                                if (empty($tournament_link)) {
                                    echo the_title();
                                }
                                else {
                                    the_title("<a href='" . $tournament_link . "'>", '</a>');
                                }
                                echo "<br>" . $location
                            ?>
                        </td>
                        <td><?php echo array_values($category)[0];  ?></td>
                        <td><?php echo array_values($surface)[0]; ?></td>
                        <td>
                            <?php 
                                if (empty($streaming['url'])) {
                                    echo '-';
                                }
                                else {
                            ?>
                                    <a data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $streaming['url']; ?>">
                            <?php
                                        echo $streaming['text'];
                            ?>
                                    </a>
                            <?php
                                }
                            ?>
                        </td>
                        <td><?php echo array_values($round)[0]; ?></td>
                    </tr>

            <?php
                endwhile;
                wp_reset_postdata();
                wp_reset_query();
            ?>

            </tbody>
        </table>
    </div>

    <?php get_template_part('modal'); ?>

<?php
    get_footer();
?>