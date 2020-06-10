<?php
/*
Template Name: Front-page
*/

 get_header(); ?>
<section class="top-site">
    <div class="flex_container top-site-container">
        <div class="top-site__article wow animate__fadeInUp" data-wow-duration="1.5s">
            <h1><?php the_field('general_title'); ?></h1>
            <span> <?php the_field('desc_general'); ?></span>
        </div>
        <div class="top-site__links wow animate__fadeInUp" data-wow-duration="1.5s">
            <?php
                $params = array(
                    'post_type' => 'utp',
                    'posts_per_page' => 5
                );
                $query = new WP_Query( $params );
                ?>
                <?php if($query->have_posts()): ?>
                    <?php $number = 0; ?>
                    <?php while ($query->have_posts()): $query->the_post() ?>
                        <?php $image_utp = get_field('image_utp')['url']; ?>
                        <?php $title_utp = get_field('title_utp'); ?>

                    <a class="top-site-link flex_col--1-1 flex_col-desk--1-5 flex_col-tab--1-2" href="">
                        <img src="<?php echo $image_utp;?>" alt="">
                        <strong> <?php echo $title_utp;?></strong>
                    </a>
                            
                        <?php endwhile; ?>
                <?php endif; 
            ?>
        </div>
    </div>
</section>

<section class="columbus-house animate__animated">
    <div class="flex_container columbus-house-container">
        <div class="columbus-house__top wow animate__fadeInUp" data-wow-duration="2s">

            <?php
                wp_reset_postdata();
                global $post;
            ?>

            <h2><?php the_field('title_block_sec_slide_first'); ?></h2>
            <span><?php the_field('desc_block_sec_slide_first'); ?></span>
            <a class="blue-btn columbus-house-link" href="#">CHCĘ WYCENĘ</a>
        </div>
        <div class="columbus-house__bottom">
            <span class="columbus-house__bottom-text wow animate__fadeInLeft" data-wow-duration="2s"><?php the_field('text_block_sec_slide_first'); ?></span>
            <button class="columbus-house__bottom-btn">Zobacz</button>
        </div>
    </div>
</section>
<section class="columbus-house columbus-house-another-bg columbus-house-hidden">
    <div class="flex_container columbus-house-container">
        <div class="columbus-house__top wow animate__fadeInUp" data-wow-duration="2s">
            <h2><?php the_field('title_block_sec_slide_sec'); ?></h2>
            <span><?php the_field('desc_block_sec_slide_sec'); ?></span>
        </div>
        <div class="columbus-house__bottom">
            <span class="columbus-house__bottom-text wow animate__fadeInLeft" data-wow-duration="2s"><?php the_field('text_block_sec_slide_sec'); ?></span>
            <button class="columbus-house__bottom-btn">Zobacz</button>
        </div>
    </div>
</section>

<!-- <section class="grig-section">
    <div class="flex_container grig-section-container">
        <h3 class="wow animate__fadeInLeft" data-wow-duration="1.5s">Ostatnie informacje</h3>
        <div class="grid-section-middle">
            <a class="grid-section-middle-link wow animate__fadeInLeft" data-wow-duration="1.5s" href="#">
                <img src="/wp-content/themes/poland/images/grid-1.jpg" alt="">
                <div class="middle-link-bottom">
                    <span class="middle-link-bottom-span">
                        <svg class="icon"><use xlink:href="#sun"/></svg>
                    </span>
                    <h4>“Mój Prąd” - dotacje do instalacji fotowoltaicznych - zasady</h4>
                </div>
            </a>
            <a class="grid-section-middle-link wow animate__fadeInRight" data-wow-duration="1.5s" href="#">
                <img src="/wp-content/themes/poland/images/grid-2.jpg" alt="">
                <div class="middle-link-bottom">
                    <span class="middle-link-bottom-span">
                        <svg class="icon"><use xlink:href="#sun"/></svg>
                    </span>
                    <h4>“Mój Prąd” - dotacje do instalacji fotowoltaicznych - zasady</h4>
                </div>
            </a>
            <a class="grid-section-middle-link wow animate__fadeInRight" data-wow-duration="1.5s" href="#">  
                <img src="/wp-content/themes/poland/images/grid-3.jpg" alt="">              
                <div class="middle-link-bottom">
                    <span class="middle-link-bottom-span">
                        <svg class="icon"><use xlink:href="#sun"/></svg>
                    </span>
                    <h4>“Mój Prąd” - dotacje do instalacji fotowoltaicznych - zasady</h4>
                </div>
            </a>
        </div>
        <a class="grid-section-link wow animate__fadeInUp" data-wow-duration="1.5s">
            Dowiedz się więcej >
        </a>
    </div>
</section> -->

<section class="form-section">
    <div class="flex_container form-section-container">
        <div class="form-section-top wow animate__fadeInUp" data-wow-duration="1.5s">
            <h2>OSZCZĘDZAJ NA RACHUNKACH ZA PRĄD</h2>
            <h4>umów sie z doradcą energetycznym na wideo-konsultację</h4>
        </div>   


        <?php echo do_shortcode('[contact-form-7 id="50" title="Контактная форма 1"]')?>

        <!-- <form action="/#wpcf7-f1380-o1" method="post" class="form-block wpcf7-form" novalidate="novalidate">
            <div style="display: none;"> 
                <input type="hidden" name="_wpcf7" value="1380"> 
                <input type="hidden" name="_wpcf7_version" value="5.1.9"> 
                <input type="hidden" name="_wpcf7_locale" value="pl_PL"> 
                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1380-o1"> 
                <input type="hidden" name="_wpcf7_container_post" value="0">
            </div>
            <div class="form-group">
                <input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text form-control" aria-invalid="false" placeholder="Imię i nazwisko">
            </div>
            <div class="form-group">
                <input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email form-control" aria-invalid="false" placeholder="Adres e-mail">
            </div>
            <div class="form-row">
                <div class="form-group flex_col-desk--1-2">
                    <input type="tel" name="your-phone" value="" size="40" clas s="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel form-control" aria-invalid="false" placeholder="Numer telefonu">
                </div>
                <div class="form-group flex_col-desk--1-2">
                    <span class="wpcf7-form-control-wrap your-postcode">
                        <input type="text" name="your-postcode" value="" size="40" class="wpcf7-form-control wpcf7-text form-control" aria-invalid="false" placeholder="Kod pocztowy">
                    </span>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check mb-3"> 
                    <span class="wpcf7-form-control wpcf7-acceptance">
                        <span class="wpcf7-list-item">
                            <label>
                                <input type="checkbox" name="acceptance-792" value="1" aria-invalid="false" class="form-check-input" id="gridCheck">
                                <span class="wpcf7-list-item-label">
                                    <label class="form-check-label-checkbox" for="gridCheck">

                                    </label>
                                </span>
                            </label>
                        </span>
                    </span> 
                    <label class="form-check-label" for="gridCheck"> Zgadzam się na przetwarzanie moich danych osobowych przez Columbus Energy, w szczególności na kontakt telefoniczny czy za pomocą poczty elektronicznej w celu przekazania oferty. 

                    </label>
                </div>
                <div class="form-check mb-3"> 
                    <span class="wpcf7-form-control wpcf7-acceptance optional">
                        <span class="wpcf7-list-item">
                            <label>
                                <input type="checkbox" name="acceptance-793" value="1" aria-invalid="false" class="form-check-input" id="gridCheck2">
                                    <span class="wpcf7-list-item-label">
                                        <label class="form-check-label-checkbox" for="gridCheck2">

                                        </label>
                                    </span>
                                </label>
                        </span>
                    </span> 
                    <label class="form-check-label" for="gridCheck2"> Wyrażam zgodę na otrzymywanie od Columbus Energy oraz podmiotów z nią powiązanych informacji marketingowych drogą elektroniczną. 

                    </label>
                </div>
            </div>
        </form> -->
    </div>
</section>

<?php
    include 'templates/search-section.php'
?>

<?php get_footer(); ?>