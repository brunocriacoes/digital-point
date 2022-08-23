<?php
get_header();
while (have_posts()) :
    the_post();
    echo "<h1>";
    the_title();
    echo "</h1>";
    echo "<hr>";
    the_content();
endwhile;
get_footer();
