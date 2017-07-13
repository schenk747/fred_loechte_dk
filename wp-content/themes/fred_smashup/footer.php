        <!-- CONTEND END -->
        <?php
            if ( is_page('video') or is_home() or is_page('podcasts') ) {
                    echo "</div>";
                echo "</div>";

            }
            else {
                echo "</div>";
            }
            
        ?>


        <!-- SIDEBAR RIGHT-->
        <div class='col-xs-12 col-md-2'>
            <?php
                get_sidebar('right');
            ?>
        </div>
    <!-- MAIN CONTAINER ROW -->
    </div>
    <!-- MAIN CONTAINER-->
</div>

<hr>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <ul class="list-inline text-center">
                    <h4>Twitter</h4>
                    <li>
                        <a href="https://twitter.com/freddienielsen">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <!--
                    <li>
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    -->
                </ul>
                <p class="copyright text-muted">Copyright &copy; Webframes 2017</p>
            </div>
        </div>
    </div>
</footer>
<?php
   /* Always have wp_footer() just before the closing </body>
    * tag of your theme, or you will break many plugins, which
    * generally use this hook to reference JavaScript files.
    */
    wp_footer(); 
?>    
    </body>
    
</html>