<?php
/*
Template Name: Page contacts
*/

get_header();?>

<section class="section-top contact-top">
    <div class="flex_container biznes-top-container wow animate__fadeInUp" data-wow-duration="1.5s">
        <h2>Masz pytania?</h2>
    </div>
</section>

<section class="contact-info">
    <div class="flex_container wow animate__fadeInUp" data-wow-duration="1.5s">
        <svg class="icon icon-contact"><use xlink:href="#phone"/></svg>
        <h3 class="title-with-line">BIURO OBSŁUGI KLIENTA</h3>
        <span class='contact-phone'>tel. 12 307 30 96</span>
        <p class='contact-text'>Biuro Obsługi Klienta dostępne jest w godzinach 8:00-18:00.</p>
        <a href="#" class='contact-mail'>bok@columbusenergy.pl</a>
        <img class="contact-logo" src="./images/logo.svg" alt="logo">
        <h3 class="title-with-line">BIURO COLUMBUS ENERGY</h3>
        <span class='contact-phone'>tel. 12 307 30 96</span>
        <span class='contact-fax'>fax. 12 311 33 13</span>
    </div>
</section>

<section class="faq-form">
	<div class="flex_container">
		<h3 class="title-with-line wow animate__fadeInUp" data-wow-duration="1.5s">ZAINTERESOWANY/-A PRĄDEM ZE SŁOŃCA?</h3>
		<h2>Odpowiemy tak szybko, jak to możliwe!</h2>

		<?php echo do_shortcode('[contact-form-7 id="204" title="faq"]'); ?>
	</div>
</section>

<section class='contact-link'>
    <div class="flex_container wow animate__fadeInUp" data-wow-duration="1.5s">
        <h3>CHCESZ DOŁĄCZYĆ DO NASZEGO ZESPOŁU?</h3>
        <a class="blue-long-btn" href="#">Kariera w Columbus Energy</a>
    </div>
</section>

<section class="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d81987.37623194218!2d19.9348336744093!3d50.046854813592944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471644c0354e18d1%3A0xb46bb6b576478abf!2z0JrRgNCw0LrQvtCyLCDQn9C-0LvRjNGI0LA!5e0!3m2!1sru!2sua!4v1592154980674!5m2!1sru!2sua" width="100%" height="900" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        <div class="above-map-block">
            <div class="left-block">
                <div class="icon-block">
                    <svg class="icon icon-contact"><use xlink:href="#phone"/></svg>
                    <span>12 307 30 96</span>
                </div>
                <div class="icon-block">
                    <svg class="icon icon-contact"><use xlink:href="#letter"/></svg>
                    <span>12 307 30 96</span>
                </div>
            </div>
            <div class="right-block">
                <span>Columbus Energy - ul. Josepha Conrada 20, 31-357 Kraków </span>
                <span>KRS 0000373608 | NIP 9492163154 | REGON 241811803</span>
                <a href="#">DOJAZD Z DWORCA KRAKÓW GŁÓWNY ></a>
            </div>
        </div>
</section>

<section class="search-section">
    <div class="flex_container search-section-container"> 
        <h4 class="flex_col-desk--1-4 wow animate__fadeInLeft" data-wow-duration="1.5s">Chcesz być na bieżąco?</h4>
        <p class="flex_col-desk--1-2 wow animate__fadeInUp" data-wow-duration="1.5s">Zapisz się do naszego darmowego newslettera i bądź na bieżąco z nowościami.</p>
        <form class="search-section-form flex_col-desk--1-4 wow animate__fadeInRight" data-wow-duration="1.5s" action="">
            <input type="text" placeholder="WPISZ SWÓJ E-MAIL">
            <button type="submit"></button>
        </form>
    </div>
</section>


<?php get_footer();?>