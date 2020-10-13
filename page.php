<?php
get_template_part('head');
?>

<?php
get_template_part('header');
?>

<div class="center-pane broider">

    <div class="page-wrapper info-page">
        <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                get_template_part( 'page-content', get_post_format() );
            endwhile; endif;
        ?>
    </div>

</div>

<?php
get_template_part('foot');
?>
