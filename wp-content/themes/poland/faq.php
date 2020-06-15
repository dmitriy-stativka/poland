<?php
/*
Template Name: Page faq
*/

get_header();?>

<section class="section-top faq-top">
    <div class="flex_container biznes-top-container wow animate__fadeInUp" data-wow-duration="1.5s">
		<h2> <?php the_field('zagolovok');?></h2>
    </div>
</section>

<section class="faq-tabs">
    <div class="flex_container">
		<h3 class="title-with-line wow animate__fadeInUp" data-wow-duration="1.5s"><?php the_field('vtoroj_zagolovok');?></h3>
		<div class="cmp-flex-tabs" >




		<?php
		$nubm = 0;
		$numb = 1;
                $params = array(
                    'post_type' => 'faq',
                    'posts_per_page' => 4
                );
                $query = new WP_Query( $params );
                ?>
                <?php if($query->have_posts()): ?>
                        <?php while ($query->have_posts()): $query->the_post() ?>
                            <?php 
								$nazvanie_taba = get_field('nazvanie_taba');     
								$numb ++;
                            ?>

							<input id="l-tab-<?php echo $numb;?>" data-flex-tab type="radio" name="flex-tab">
							<label class="cmp-flex-tabs__tab wow animate__fadeInRight" data-wow-duration="0.5s" for="l-tab-<?php echo $numb;?>">
								<span class="tabs__tab-wrapper">
									<svg class="icon-tabs"><use xlink:href="#biznes-1"/></svg>
								</span>		
								<h3><?php echo $nazvanie_taba;?></h3>
							</label>		
							<div class="cmp-flex-tabs__content wow animate__fadeInRight" data-wow-duration="1.5s">
								<div class="half">

									<?php while ( have_rows('tab') ) : the_row(); ?>
									<?php 
										$nubm ++;
										$utp_zagolvook = get_sub_field('utp_zagolvook'); 
										$opisanie_taba = get_sub_field('opisanie_taba'); 
										$zagolovok_taba = get_sub_field('zagolovok_taba'); ?>
								
										<div class="tab">
											<input id="tab-1-<?php echo $nubm;?>" type="checkbox" name="tabs">
											<label for="tab-1-<?php echo $nubm;?>"><?php echo $zagolovok_taba;?></label>
											<div class="tab-content">
												<p><?php echo $opisanie_taba;?></p>
											</div>
										</div>
									<?php endwhile; ?>

								</div>
							</div>

                        <?php endwhile; ?>
                <?php endif; 
            ?>
		</div>
    </div>
</section>

<section class="faq-form">
	<div class="flex_container">

		<?php
            wp_reset_postdata();
            global $post;
        ?> 

		<h3 class="title-with-line wow animate__fadeInUp" data-wow-duration="1.5s"><?php the_field('zagolovok_formy');?></h3>
		<h2><?php the_field('vtoroj_zagolovok_formy');?></h2>

		<?php echo do_shortcode('[contact-form-7 id="204" title="faq"]'); ?>
	</div>
</section>

<?php
    include 'templates/search-section.php'
?>


<?php get_footer();?>