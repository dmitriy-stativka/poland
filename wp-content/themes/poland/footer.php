<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package poland
 */

?>

	<footer class="footer">
		<div class="flex_container">
			<div class="footer-top wow animate__fadeInUp" data-wow-duration="1s">
				<div class="footer-list flex_col--1-1 flex_col-desk--1-3">	
					<a class="footer-list-main" href="#">OFERTY DEDYKOWANE</a>
					<ul class="footer-list-links">			
						<li><a href="">Dla Domu</a></li>
						<li><a href="">Dla Biznesu</a></li>
						<li><a href="">Dla Rolnika</a></li>
						<li><a href="">Farmy PV</a></li>
						<li><a href="">GoBloo</a></li>
					</ul>
				</div>
				<div class="footer-list flex_col--1-1 flex_col-desk--1-3">					
					<a class="footer-list-main" href="#">INFORMACJE</a>
					<ul class="footer-list-links">			
						<li><a href="">O firmie</a></li>
						<li><a href="">Kariera</a></li>
						<li><a href="">FAQ – porady</a></li>
						<li><a href="">Blog</a></li>
						<li><a href="">Dokumenty do pobrania</a></li>
						<li><a href="">Polityka Prywatności</a></li>
					</ul>
				</div>
				<div class="footer-list flex_col--1-1 flex_col-desk--1-3">				
					<a class="footer-list-main" href="#">BIURO OBSŁUGI KLIENTA</a>
					<ul class="footer-list-links">			
						<li><a href="">tel. 12 307 30 96</a></li>
						<li><a href="">BOK dostępne w godzinach 8:00-18:00.</a></li>
						<li><a href="">tel. 12 307 30 90</a></li>
						<li><a href="">fax. 12 311 33 13</a></li>
						<li><a href="">bok@columbusenergy.pl</a></li>
					</ul>
				</div>
			</div>
			<div class="footer-bottom wow animate__fadeInRight" data-wow-duration="1s">
				<p>Columbus Energy S.A. - lider rynku fotowoltaiki w Polsce</p>
				<a class="footer-logo" href="#">
					<img src="/wp-content/themes/poland/images/logo-footer.svg" alt="">
				</a>
			</div>
		</div>
	
	<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">     

		<symbol id="sun" viewBox="0 0 302.4 302.4">
			<path d="M204.8,97.6C191.2,84,172,75.2,151.2,75.2s-40,8.4-53.6,22.4c-13.6,13.6-22.4,32.8-22.4,53.6s8.8,40,22.4,53.6
				c13.6,13.6,32.8,22.4,53.6,22.4s40-8.4,53.6-22.4c13.6-13.6,22.4-32.8,22.4-53.6S218.8,111.2,204.8,97.6z"/>
			<path d="M151.2,51.6c5.6,0,10.4-4.8,10.4-10.4V10.4c0-5.6-4.8-10.4-10.4-10.4c-5.6,0-10.4,4.8-10.4,10.4v30.8
				C140.8,46.8,145.6,51.6,151.2,51.6z"/>
			<path d="M236.4,80.8l22-22c4-4,4-10.4,0-14.4s-10.4-4-14.4,0l-22,22c-4,4-4,10.4,0,14.4C225.6,84.8,232,84.8,236.4,80.8z"/>
			<path d="M292,140.8h-30.8c-5.6,0-10.4,4.8-10.4,10.4c0,5.6,4.8,10.4,10.4,10.4H292c5.6,0,10.4-4.8,10.4-10.4
				C302.4,145.6,297.6,140.8,292,140.8z"/>
			<path d="M236,221.6c-4-4-10.4-4-14.4,0s-4,10.4,0,14.4l22,22c4,4,10.4,4,14.4,0s4-10.4,0-14.4L236,221.6z"/>
			<path d="M151.2,250.8c-5.6,0-10.4,4.8-10.4,10.4V292c0,5.6,4.8,10.4,10.4,10.4c5.6,0,10.4-4.8,10.4-10.4v-30.8
				C161.6,255.6,156.8,250.8,151.2,250.8z"/>
			<path d="M66,221.6l-22,22c-4,4-4,10.4,0,14.4s10.4,4,14.4,0l22-22c4-4,4-10.4,0-14.4C76.8,217.6,70.4,217.6,66,221.6z"/>
			<path d="M51.6,151.2c0-5.6-4.8-10.4-10.4-10.4H10.4c-5.6,0-10.4,4.8-10.4,10.4s4.8,10.4,10.4,10.4h30.8
				C46.8,161.6,51.6,156.8,51.6,151.2z"/>
			<path d="M66,80.8c4,4,10.4,4,14.4,0s4-10.4,0-14.4l-22-22c-4-4-10.4-4-14.4,0s-4,10.4,0,14.4L66,80.8z"/>
		</symbol>

	</svg>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
	new WOW().init();
</script>
<script src="/wp-content/themes/poland/js/app.min.js"></script>

</body>
</html>
