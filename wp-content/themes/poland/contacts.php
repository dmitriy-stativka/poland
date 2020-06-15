<?php
/*
Template Name: Page contacts
*/

get_header();?>

<section class="section-top contact-top">
    <div class="flex_container biznes-top-container wow animate__fadeInUp" data-wow-duration="1.5s">
        <h2><?php the_field('zagolovok');?></h2>
    </div>
</section>

<section class="contact-info">
    <div class="flex_container wow animate__fadeInUp" data-wow-duration="1.5s">
        <svg class="icon icon-contact"><use xlink:href="#phone"/></svg>
        <h3 class="title-with-line"> <?php the_field('informaczionnyj');?></h3>
        <a href="tel: <?php the_field('nomer_telefona');?>" class='contact-phone'>tel. <?php the_field('nomer_telefona');?></a>
        <p class='contact-text'><?php the_field('rezhim_raboty');?></p>
        <a href="mailto: <?php the_field('pochta');?>" class='contact-mail'><?php the_field('pochta');?></a>
        <img class="contact-logo" src="images/logo.svg" alt="logo">
        <h3 class="title-with-line"><?php the_field('vtoroj_informaczionnyj_zagolovok');?></h3>
        <a href="tel: <?php the_field('vtoroj_nomer_telefona');?>" class='contact-phone'>tel. <?php the_field('vtoroj_nomer_telefona');?></a>
        <span class='contact-fax'>fax. <?php the_field('faks');?></span>
    </div>
</section>

<section class="faq-form">
	<div class="flex_container">
		<h3 class="title-with-line wow animate__fadeInUp" data-wow-duration="1.5s"><?php the_field('forma_zagolovok');?></h3>
		<h2><?php the_field('forma_o');?></h2>
		<?php echo do_shortcode('[contact-form-7 id="204" title="faq"]'); ?>
	</div>
</section>

<section class='contact-link'>
    <div class="flex_container wow animate__fadeInUp" data-wow-duration="1.5s">
        <h3><?php the_field('zvezdnyj_zagolvook');?></h3>
        <a class="blue-long-btn" href="#"> <?php the_field('zvezdnyj_blok_knopka');?></a>
    </div>
</section>

<section class="contact-map">
    <?php the_field('karta');?>
        <div class="above-map-block">
            <div class="left-block">
                <div class="icon-block">
                    <svg class="icon icon-contact"><use xlink:href="#phone"/></svg>
                    <span> <?php the_field('karta_telefon');?></span>
                </div>
                <div class="icon-block">
                    <svg class="icon icon-contact"><use xlink:href="#letter"/></svg>
                    <span><?php the_field('karta_pismo');?> </span>
                </div>
            </div>
            <div class="right-block">
                <span> <?php the_field('karta_informacziya_1');?></span>
                <span><?php the_field('karta_informacziya_2');?></span>
                <a href="#"><?php the_field('karta_knopka');?></a>
            </div>
        </div>
</section>

<?php
    include 'templates/search-section.php'
?>


<?php get_footer();?>