<?php
/*
Template Name: Page for business
*/

get_header();?>

<section class="section-top biznes-top">
    <div class="flex_container biznes-top-container wow animate__fadeInUp" data-wow-duration="1.5s">
        <h2><?php the_field('title_business');?></h2>
    </div>
</section>

<section class="biznes-second">
    <div class="flex_container biznes-second-container">
        <h3 class="title-with-line wow animate__fadeInUp" data-wow-duration="1.5s"><?php the_field('sec_block_title');?></h3>
        <div class="biznes-second-middle-block wow animate__fadeInUp" data-wow-duration="1.5s">
            <p><?php the_field('sec_block_decsription');?></p>
            <a class="blue-long-btn" href="#"><?php the_field('sec_block_button');?></a>
        </div>
    </div>
</section>

<section class="biznes-icons">
    <div class="flex_container">
        <h3 class="title-with-line wow animate__fadeInUp" data-wow-duration="1.5s">NIEZALEŻNOŚĆ ENERGETYCZNA</h3>
        <div class="biznes-icons-middle">
            <?php
                $params = array(
                    'post_type' => 'energeticheskaya',
                    'posts_per_page' => 3
                );
                $query = new WP_Query( $params );
                ?>
                <?php if($query->have_posts()): ?>
                    <?php $number = 0; ?>
                    <?php while ($query->have_posts()): $query->the_post() ?>
                        <?php $izobrazhenie_energeticheskaya = get_field('izobrazhenie_energeticheskaya')['url']; ?>
                        <?php $eshedu_energeticheskaya = get_field('eshedu_energeticheskaya'); ?>
                        <?php $opisanie_energeticheskaya = get_field('opisanie_energeticheskaya'); ?>
                            <div class="biznes-icons-middle__block wow animate__fadeInRight" data-wow-duration="0.5s">
                                <img src="<?php echo $izobrazhenie_energeticheskaya;?>" alt="">
                                <h4><?php echo $eshedu_energeticheskaya;?></h4>
                                <span><?php echo $opisanie_energeticheskaya;?></span>
                            </div>
                        <?php endwhile; ?>
                <?php endif; 
            ?>

        </div>
    </div>
</section>

<section class="biznes-tabs">
  <div class="flex_container">
        <h3 class="title-with-line wow animate__fadeInUp" data-wow-duration="1.5s">JAK TO DZIAŁA?</h3>
        <div class="biznes-tabs-middle">
            <div class="biznes-tabs-left wow animate__fadeInUp" data-wow-duration="1.5s">
                
                <div class="tabbed">
                    <input type="radio" name="tabs" id="tab-nav-1" checked="checked">
                    <label for="tab-nav-1">1</label>
                    <input type="radio" name="tabs" id="tab-nav-2">
                    <label for="tab-nav-2">2</label>
                    <input type="radio" name="tabs" id="tab-nav-3">
                    <label for="tab-nav-3">3</label>
                    <div class="tabs">
                    <?php
                        wp_reset_postdata();
                        global $post;
                    ?>
                        <div>
                            <p><?php the_field('first_tab');?> </p>
                        </div>
                        <div>
                            <p><?php the_field('second_tab');?></p>
                        </div>
                        <div>
                            <p><?php the_field('third_tab');?></p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="biznes-tabs-right wow animate__fadeInUp" data-wow-duration="1.5s">
                <img src="/wp-content/themes/poland/images/tabs-right-img.jpg" alt="">
            </div>
        </div>
  </div>
</section>

<section class="whole-slider">
    <h3 class="whole-slider-title title-with-line wow animate__fadeInUp" data-wow-duration="1.5s">NASZE INSTALACJE</h3>
    <div class="single-item">
        <?php while ( have_rows('slider_biznes') ) : the_row(); ?>
            <?php $slide_img = get_sub_field('slide_img')['url']; ?>
            <div class="holder">
                <img src="<?php echo $slide_img;?>" alt="">
            </div>
        <?php endwhile; ?>
    </div>
</section>

<section class="biznes-timeline">
    <div class="flex_container">
        <h3 class="title-with-line wow animate__fadeInUp" data-wow-duration="1.5s">JAK TO DZIAŁA?</h3>
        <article class="article wow animate__fadeInUp" data-wow-duration="1.5s">
            <div class="grid__item--1of1 text-center">
              
                <div class="tabs">
                    <?php while ( have_rows('how_work') ) : the_row(); ?>
                    
                        <?php $title_how_work = get_sub_field('title_how_work'); 
                            $number_of_tab ++;
                            $description_how_work = get_sub_field('description_how_work'); ?>
            

                        <input type="radio" name="timeline" id="timeline<?php echo $number_of_tab;?>" checked>
                        <label for="timeline<?php echo $number_of_tab;?>">
                            <span class="tabs-span tabs-span-text"><?php echo $title_how_work;?></span>
                            <span class="tabs-span tabs-span-number"><?php echo $number_of_tab;?></span>
                        </label>

                        <div id="tab__content--<?php echo $number_of_tab;?>" class="tab__content">
                            <img src="/wp-content/themes/poland/images/logo.svg" alt="">
                            <p><?php echo $description_how_work;?></p>
                        </div>  
                    <?php endwhile; ?>
                </div>
            </div>
        </article>
    </div>
</section>

<section class="biznes-bottom-link">
    <div class="flex_container biznes-bottom-link-container wow animate__fadeInUp" data-wow-duration="1.5s">
        <h2><?php the_field('low_price_title');?></h2>
        <a class="blue-long-btn" href="#"><?php the_field('low_price_button');?></a>
    </div>
</section>

<?php
    include 'templates/search-section.php'
?>
<?php get_footer();?>