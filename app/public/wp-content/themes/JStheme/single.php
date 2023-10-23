<?php

get_header(); #calling the header.php

while (have_posts()) {
    the_post(); ?>

    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>

<?php }

get_footer(); # calling the footer.php

?>