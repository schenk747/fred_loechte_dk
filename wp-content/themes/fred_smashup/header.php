<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
        /* Always have wp_head() just before the closing </head>
         * tag of your theme, or you will break many plugins, which
         * generally use this hook to add elements to <head> such
         * as styles, scripts, and meta tags.
         */    
        wp_head(); 
    ?>
</head>
    
<body>

<!-- Set your background image for this header on the line below. -->
<?php 
    if( is_home() ) {
        $post_id = get_option('page_for_posts', true);
        $thumbnail_url = get_the_post_thumbnail_url($post_id);
    }
    else {
        $thumbnail_url = get_the_post_thumbnail_url();
    }
?>
    
<header class="intro-header" style="background-image: url('<?php echo $thumbnail_url; ?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1><?php single_post_title(); ?></h1>
                    <hr class="small">
                    <?php
                        if ( is_home() ) {
                            $post_id = get_option('page_for_posts', true);
                            $abstract = CFS()->get('abstract', $post_id);
                        }
                        else {
                            $abstract = CFS()->get('abstract');
                        }
                    ?>
                    <span class="subheading"><?php echo $abstract; ?></span>


                </div>
            </div>
        </div>
    </div>
</header>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--<a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>-->
        </div>
    <?php 
        #identifer referenced in functions.php --> register_nav_menus()
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
               # 'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right'
            ));
#                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
#                'walker'            => new WP_Bootstrap_Navwalker())

    ?>
    </div>
    <!-- /.container -->
</nav>
    
<!-- MAIN CONTAINER -->
<div class="container-fluid">
    <div class="row">
            <!-- SIDEBAR LEFT-->
            <div class='col-xs-12 col-md-2'>
                <?php
                    get_sidebar();
                ?>
            </div>
            <!-- CONTENT -->
            <?php
                if ( is_front_page() ) {	

                }
                elseif ( is_page('video') or is_home() or is_page('podcasts') ) {
            ?>
                <div class="col-xs-12 col-md-8">
                    <div class="row">
            <?php    
                }
                else {
                    echo "<div class='col-xs-12 col-md-8'>";
                }
                ?>
