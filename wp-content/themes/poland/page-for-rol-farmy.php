<?php
/*
Template Name: Page for rolnika-farmy
*/

get_header();?>

<section class="section-top rolnik-top">
    <div class="flex_container biznes-top-container rolnik-top-container wow animate__fadeInUp" data-wow-duration="1.5s">
        <h2 class="rolnik-top-title">Oszczędzaj z fotowoltaiką dla biznesu! <span>odliczysz od podatku rolnego</span></h2>       
    </div>
</section>

<section class="rolnik-link">
    <div class="flex_container rolnik-link-container wow animate__fadeInUp" data-wow-duration="1.5s">
        <h3 class="title-with-line rolnik-link-titile">MASZ GRUNT LUB DZIAŁKĘ? WYNAJMIJ JĄ I ZARABIAJ</h3>
        <p><strong>Farma fotowoltaiczna może powstać na Twojej działce:</strong>Rozliczasz się z podatku rolnego? Zgodnie z prawem możesz odliczyć 25% wartości inwestycji w Twoją instalację! (art. 13 Ustawy o podatku rolnym 2017 (Dz.U. 2016, poz. 617)</p>
        <!-- <ul>
            <li>- o powierzchni ok. 2 ha lub większej</li>
            <li>- nieosłoniętej przez budynki i drzewa</li>
            <li>- zorientowanej na południe lub płaskiej</li>
            <li>- o IV lub niższej klasie gruntu</li>
            <li>- do 200 m od linii elektroenergetycznej</li>
            <li> - z dojazdem utwardzaną drogą</li>
        </ul> -->
        <a class="blue-long-btn" href="#">Umów się na audyt</a>
    </div>
</section>

<section class="whole-slider">

        <h3 class="whole-slider-title title-with-line wow animate__fadeInUp" data-wow-duration="1.5s">NASZE REALIZACJE</h3>
 
        <div class="single-item">
            <div class="holder">
                <img src="/wp-content/themes/poland/images/slider-1.jpg" alt="">
            </div>
            <div class="holder">
                <img src="/wp-content/themes/poland/images/slider-2.jpg" alt="">    
            </div>
            <div class="holder">
                <img src="/wp-content/themes/poland/images/slider-3.jpg" alt="">
            </div>
       </div>

   
</section>

<section class="rolnik-icons">
    <div class="flex_container">
        <h3 class="whole-slider-title title-with-line wow animate__fadeInUp" data-wow-duration="1.5s">OSZCZĘDZAJ DZIĘKI DARMOWEJ ENERGII ZE SŁOŃCA</h3>
        <div class="rolnik-icons-middle">
            <div class="rolnik-icons-middle__block wow animate__fadeInRight" data-wow-duration="0.5s">
                <svg class="icon-big"><use xlink:href="#biznes-1"/></svg>
                <span>KOSZTY INSTALACJI ODLICZONE OD PODATKU ROLNEGO</span>
            </div>
            <div class="rolnik-icons-middle__block wow animate__fadeInRight" data-wow-duration="1s">
                <svg class="icon-big"><use xlink:href="#biznes-1"/></svg>
                <span>25 LETNIA GWARANCJA NA SPRAWNOŚĆ</span>
            </div>
            <div class="rolnik-icons-middle__block wow animate__fadeInRight" data-wow-duration="1.5s">
                <svg class="icon-big"><use xlink:href="#biznes-1"/></svg>
                <span>INSTALACJA NAWET W JEDEN DZIEŃ</span>
            </div>
        </div>
    </div>
</section>

<section class="biznes-bottom-link">
    <div class="flex_container biznes-bottom-link-container wow animate__fadeInUp" data-wow-duration="1.5s">
        <h2>TWOJA INSTALACJA FOTOWOLTAICZNA OD LIDERA BRANŻY W POLSCE</h2>
        <a class="blue-long-btn" href="#">Dowiedz się więcej o fotowoltaice dla rolnika</a>
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