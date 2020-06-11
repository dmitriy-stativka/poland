<?php
/*
Template Name: Page for rolnika-farmy
*/

get_header();?>

<section class="section-top rolnik-top">
    <div class="flex_container biznes-top-container rolnik-top-container wow animate__fadeInUp" data-wow-duration="1.5s">
        <h2 class="rolnik-top-title"> <?php the_field('zagolovok_straniczy'); ?> <span> <?php the_field('opisanie_straniczy'); ?></h2>       
    </div>
</section>

<section class="rolnik-link">
    <div class="flex_container rolnik-link-container wow animate__fadeInUp" data-wow-duration="1.5s">
        <h3 class="title-with-line rolnik-link-titile"> <?php the_field('vtoroj_blok_zagolovok'); ?></h3>
        <p><strong></strong> <?php the_field('vtoroj_blok_opisanie');?></p>
        <a class="blue-long-btn" href="#"> <?php the_field('vtoroj_blok_knopka');?> </a>
    </div>
</section>

<section class="whole-slider">
        <h3 class="whole-slider-title title-with-line wow animate__fadeInUp" data-wow-duration="1.5s"> <?php the_field('zagolovok_slajdera');?></h3>
        <div class="single-item">
            <?php while ( have_rows('slajder') ) : the_row(); ?>
                <?php $izobrazhenie_slajdera = get_sub_field('izobrazhenie_slajdera')['url']; ?>
                <div class="holder">
                    <img src="<?php echo $izobrazhenie_slajdera;?>" alt="">
                </div>
            <?php endwhile; ?>
       </div>
</section>

<section class="rolnik-icons">
    <div class="flex_container">
        <h3 class="whole-slider-title title-with-line wow animate__fadeInUp" data-wow-duration="1.5s"><?php the_field('utp_zagolovok');?></h3>
        <div class="rolnik-icons-middle">


            <?php while ( have_rows('utp_sohranenie_energii') ) : the_row(); ?>
                <?php $utp_izobrazhenie = get_sub_field('utp_izobrazhenie')['url'];
                    $utp_zagolvook = get_sub_field('utp_zagolvook'); 
                    $utp_podzagolovok = get_sub_field('utp_podzagolovok'); ?>
              
                <div class="rolnik-icons-middle__block wow animate__fadeInRight" data-wow-duration="0.5s">
                    <img src="<?php echo $utp_izobrazhenie;?>" alt="">
                    <span><?php echo $utp_zagolvook;?></span>

                    <?php if($utp_podzagolovok){ ?>
                        <span><?php echo $utp_podzagolovok;?></span>
                    <?php }?>
                    
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<section class="biznes-bottom-link">
    <div class="flex_container biznes-bottom-link-container wow animate__fadeInUp" data-wow-duration="1.5s">
        <h2><?php the_field('poslednij_blok_zagolovok'); ?></h2>
        <a class="blue-long-btn" href="#"> <?php the_field('poslednij_blok_knopka'); ?></a>
    </div>
</section>

<?php
    include 'templates/search-section.php'
?>


<?php get_footer();?>