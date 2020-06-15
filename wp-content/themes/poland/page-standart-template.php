<?php
/*
Template Name: Page standart template
*/

get_header();?>
<div class="page-info">
    <div class="flex_container">
        <?php
            wp_reset_postdata();
            global $post;
        ?> 
        <?php the_content();?>
    </div>
</div>

<?php get_footer();?>