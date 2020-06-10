<?php
/*
Template Name: Page for home
*/

get_header();?>

<section class="dla-domu-top">
    <div class="flex_container dla-domu-container wow animate__fadeInUp" data-wow-duration="1.5s">
        <h1><?php the_field('title_dom');?></h1>
        <h4><?php the_field('opisanie_dom');?></h4>
    </div>
</section>

<section class="dla-domu-advantages">
    <div class="flex_container dla-domu-advantages-container">
        <h2 class="dla-domu-advantages-title wow animate__fadeInUp" data-wow-duration="1.5s"><?php the_field('title_poznanie');?></h2>
        <div class="dla-domu-advantages-middle">


            <div class="advantages-middle-block wow animate__fadeInLeft" data-wow-duration="1.5s">
                <div class="advantages-middle-block-top">
                    <img src="<?php echo get_field('sravnenie_first')['url'];?>" alt="">
                    <h3 class="advantage-title advantage-blue"><?php the_field('sravnenie_first_title');?></h3>
                </div>                
                <p class="advantages-middle-block-text"><strong><?php the_field('sravnenie_first_podzagolvok');?></strong> <?php the_field('sravnenie_first_desc');?></p>
                <ul class="advantages-middle-block-list">
                    <?php while ( have_rows('sravnenie_1_spisok') ) : the_row(); ?>
                        <?php $sravnenie_1_item = get_sub_field('sravnenie_1_item'); ?>
                        <li><?php echo $sravnenie_1_item;?></li>
                    <?php endwhile; ?>
                </ul>
            </div>

            <div class="advantages-middle-block wow animate__fadeInRight" data-wow-duration="1.5s">
                <div class="advantages-middle-block-top">
                    <img src="<?php echo get_field('sravnenie_sec')['url'];?>" alt="">
                    <h3 class="advantage-title advantage-blue"><?php the_field('sravnenie_sec_title');?></h3>
                </div>                
                <p class="advantages-middle-block-text"><strong><?php the_field('sravnenie_sec_podzagolvok');?></strong> <?php the_field('sravnenie_sec_desc');?></p>
                <ul class="advantages-middle-block-list">
                    <?php while ( have_rows('sravnenie_2_spisok') ) : the_row(); ?>
                        <?php $sravnenie_2_item = get_sub_field('sravnenie_2_item'); ?>
                        <li><?php echo $sravnenie_2_item;?></li>
                    <?php endwhile; ?>
                </ul>
            </div>



        </div>
        <a class="advantages-btn blue-btn wow animate__fadeInUp" data-wow-duration="1.5s" href="#">CHCĘ WYCENĘ</a>
    </div>
</section>

<section class="guarantee">
    <div class="flex_container">
        <h3 class="guarantee-title wow animate__fadeInUp" data-wow-duration="1.5s"><?php the_field('lgoti_title');?></h3>
        <div class="guarantee-middle">








        <?php
                $params = array(
                    'post_type' => 'lgota',
                    'posts_per_page' => 4
                );
                $query = new WP_Query( $params );
                ?>
                <?php if($query->have_posts()): ?>
                        <?php while ($query->have_posts()): $query->the_post() ?>
                            <?php $name_of_lgota = get_field('name_of_lgota'); 
                                $kratkoe_opisanie_lgoty = get_field('kratkoe_opisanie_lgoty'); 
                                $knopka_lgoty = get_field('knopka_lgoty'); 
                                $izobrazhenie_lgoty = get_field('izobrazhenie_lgoty')['url'];     
                            ?>

                            <a class="guarantee-middle-block wow animate__fadeInRight" data-wow-duration="0.5s">
                                <img src="<?php echo $izobrazhenie_lgoty;?>" alt="">
                                <span class="guarantee-span span-blue"><?php echo $name_of_lgota;?></span>
                                <p class="guarantee-middle-block-text"><?php echo $kratkoe_opisanie_lgoty;?></p>
                                <span class="guarantee-middle-block-link" href="#"><?php echo $knopka_lgoty;?></span>
                            </a>
                        <?php endwhile; ?>
                <?php endif; 
            ?>
        </div>
        <a class="guarantee-link wow animate__fadeInUp" data-wow-duration="1.5s" href="#">Zobacz jak obliczyć moc instalacji</a>
    </div>
</section>

<section class="columbus-only">
    <div class="flex_container columbus-only-container wow animate__fadeInUp" data-wow-duration="1.5s">           
        <?php
            wp_reset_postdata();
            global $post;
        ?> 
        <h3><?php the_field('tolko_v_fg_energy_zagolovok');?></h3>
        <h4><?php the_field('fg_energy_podzagolovok');?></h4>
        <p><?php the_field('fg_energy_opisanie');?></p>
        <a href="#"><?php the_field('fg_energy_knopka');?></a>        
    </div>
</section>

<section class="dla-domu-grid">
    <div class="flex_container">
        <h3 class="wow animate__fadeInUp" data-wow-duration="1.5s"><?php the_field('gallary_title');?></h3>
        <div class="dla-domu-grid-middle">
            <?php while ( have_rows('gallary') ) : the_row(); ?>
                <?php $image_gallary = get_sub_field('image_gallary')['url']; ?>
                <img class="wow animate__fadeInLeft" data-wow-duration="1.5s" src="<?php echo $image_gallary;?>" alt="">
            <?php endwhile; ?>
        </div>
    </div>
</section>

<section class="dla-domu-bottom">
    <div class="flex_container dla-domu-bottom-container wow animate__fadeInUp" data-wow-duration="1.5s">
        <h3 class="dla-domu-bottom-title"> <?php the_field('last_titile');?> </h3>
        <a class="dla-domu-bottom-link" href="#">  <?php the_field('poslednij_blok_knopka');?></a>
    </div>
</section>

<?php
    include 'templates/search-section.php'
?>

<?php get_footer();?>