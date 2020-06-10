
<section class="search-section">
    <div class="flex_container search-section-container"> 
        <h4 class="flex_col-desk--1-4 wow animate__fadeInLeft" data-wow-duration="1.5s">  <?php the_field('mail_block_title', 10); ?></h4>
        <p class="flex_col-desk--1-2 wow animate__fadeInUp" data-wow-duration="1.5s"> <?php the_field('mail_block_desc', 10); ?> </p>
        <div class="search-section-form flex_col-desk--1-4 wow animate__fadeInRight" data-wow-duration="1.5s" action="">
            <?php echo do_shortcode('[contact-form-7 id="54" title="mail form"]')?>
        </div>
    </div>
</section>